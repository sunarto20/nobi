<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        try {

            if ($request->amount == 0.00000001) {
                return response()->json([
                    'status' => false,
                    'message' => 'amount tidak boleh 0.00000001'
                ], 400);
            }

            $balance = Balance::where('user_id', $request->user_id)->firstOrFail();
            if ($balance->amount_available < $request->amount) {
                return response()->json([
                    'status' => false,
                    'message' => 'amount available tidak boleh kurang dari input amount'
                ], 400);
            }

            DB::beginTransaction();
            $transactionByTrxId = Transaction::where('trx_id', $request->trx_id)->count();
            if ($transactionByTrxId > 0) {
                return response()->json([
                    'status' => false,
                    'message' => 'trx_id sudah ada'
                ], 400);
            }

            $transaction = Transaction::create($request->all());

            $balance = Balance::where('user_id', $request->user_id)->update(
                [
                    'amount_available' => $balance->amount_available - $request->amount
                ]
            );
            DB::commit();


            return response()->json([
                "trx_id" => $transaction->trx_id,
                "amount" => $transaction->amount,
                "message" => 'Transaksi berhasil di tambahkan',
            ], 201);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 400);
        }
    }
}
