<?php

namespace Database\Seeders;

use App\Models\Balance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BalanceSeeder extends Seeder
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
                'user_id' => 1,
                'amount_available' => '0.00674223',
                'created_at' => '2022-03-07 09:57:13',
                'updated_at' => '2022-03-07 09:57:13'
            ],
            [
                'user_id' => 2,
                'amount_available' => '1.00000000',
                'created_at' => '2022-03-07 09:57:13',
                'updated_at' => '2022-03-07 09:57:13'
            ],
            [
                'user_id' => 3,
                'amount_available' => '0.00000001',
                'created_at' => '2022-03-07 09:57:13',
                'updated_at' => '2022-03-07 09:57:13'
            ],
            [
                'user_id' => 4,
                'amount_available' => '21.00000000',
                'created_at' => '2022-03-07 09:57:13',
                'updated_at' => '2022-03-07 09:57:13'
            ],
        ];

        foreach ($data as $key => $value) {
            Balance::create($value);
        }

        return;
    }
}
