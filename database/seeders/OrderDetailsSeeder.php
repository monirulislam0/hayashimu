<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      OrderDetail::insert(
            [
                [
                    'id' => 2,
                    'order_id' => 2,
                    'product_id' => 49,
                    'qty' => 2,
                    'price' => 500.00,
                    'created_at' => '2023-12-10 04:24:27',
                    'updated_at' => '2023-12-10 04:24:27',
                ],
                [
                    'id' => 3,
                    'order_id' => 3,
                    'product_id' => 49,
                    'qty' => 2,
                    'price' => 500.00,
                    'created_at' => '2023-12-10 04:27:12',
                    'updated_at' => '2023-12-10 04:27:12',
                ],
                [
                    'id' => 4,
                    'order_id' => 4,
                    'product_id' => 57,
                    'qty' => 2,
                    'price' => 5000.00,
                    'created_at' => '2023-12-11 15:31:52',
                    'updated_at' => '2023-12-11 15:31:52',
                ],
                [
                    'id' => 5,
                    'order_id' => 5,
                    'product_id' => 44,
                    'qty' => 1,
                    'price' => 500.00,
                    'created_at' => '2023-12-18 23:37:33',
                    'updated_at' => '2023-12-18 23:37:33',
                ],
                [
                    'id' => 6,
                    'order_id' => 6,
                    'product_id' => 57,
                    'qty' => 1,
                    'price' => 5000.00,
                    'created_at' => '2023-12-19 00:51:46',
                    'updated_at' => '2023-12-19 00:51:46',
                ],
                [
                    'id' => 7,
                    'order_id' => 7,
                    'product_id' => 62,
                    'qty' => 1,
                    'price' => 700000.00,
                    'created_at' => '2023-12-20 03:03:46',
                    'updated_at' => '2023-12-20 03:03:46',
                ],
                [
                    'id' => 8,
                    'order_id' => 8,
                    'product_id' => 140,
                    'qty' => 1,
                    'price' => 50000.00,
                    'created_at' => '2023-12-30 17:05:08',
                    'updated_at' => '2023-12-30 17:05:08',
                ],
                [
                    'id' => 9,
                    'order_id' => 9,
                    'product_id' => 124,
                    'qty' => 1,
                    'price' => 5000.00,
                    'created_at' => '2024-01-02 19:18:55',
                    'updated_at' => '2024-01-02 19:18:55',
                ],
            ]
        );
    }
}
