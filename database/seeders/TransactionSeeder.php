<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'trx_id' => 'a',
                'user_id' => 1,
                'amount' => 0.01000000,
                'created_at' => '2022-03-07 09:55:44',
                'updated_at' => '2022-03-07 09:55:44'
            ],
            [
                'trx_id' => 'B',
                'user_id' => 1,
                'amount' => 0.02000000,
                'created_at' => '2022-03-07 09:55:44',
                'updated_at' => '2022-03-07 09:55:44'
            ],
        ];

        foreach ($data as $key => $value) {
            Transaction::create($value);
        }

        return;
    }
}
