<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    public function index()
    {
        try {

            $quote = Http::get('https://api.chucknorris.io/jokes/random');

            return response()->json([
                'status' => true,
                'quote' => $quote['value'],
                'source' => $quote['url']
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 400);
        }
    }
}
