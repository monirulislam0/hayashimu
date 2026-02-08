<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Order::insert(
            $orders = [
                [
                    'id' => 2,
                    'user_id' => 1,
                    'shipping_id' => 19,
                    'order_no' => '100001',
                    'shipping_method' => 'Delivery',
                    'payment_method' => 'COD',
                    'payment_status' => 'Pending',
                    'order_status' => 'Pending',
                    'sub_total' => 1000.00,
                    'tax' => 0.00,
                    'delivery_charge' => 0.00,
                    'grand_total' => 1000.00,
                    'is_active' => 1,
                    'created_at' => '2023-12-10 04:24:27',
                    'updated_at' => '2023-12-10 04:24:27',
                ],
                [
                    'id' => 3,
                    'user_id' => 1,
                    'shipping_id' => 20,
                    'order_no' => '100002',
                    'shipping_method' => 'Delivery',
                    'payment_method' => 'COD',
                    'payment_status' => 'Pending',
                    'order_status' => 'Accepted',
                    'sub_total' => 1000.00,
                    'tax' => 0.00,
                    'delivery_charge' => 0.00,
                    'grand_total' => 1000.00,
                    'is_active' => 1,
                    'created_at' => '2023-12-10 04:27:12',
                    'updated_at' => '2023-12-11 19:37:31',
                ],
                [
                    'id' => 4,
                    'user_id' => 1,
                    'shipping_id' => 21,
                    'order_no' => '100003',
                    'shipping_method' => 'Delivery',
                    'payment_method' => 'COD',
                    'payment_status' => 'Pending',
                    'order_status' => 'Canceled',
                    'sub_total' => 10000.00,
                    'tax' => 0.00,
                    'delivery_charge' => 0.00,
                    'grand_total' => 10000.00,
                    'is_active' => 1,
                    'created_at' => '2023-12-11 15:31:52',
                    'updated_at' => '2023-12-11 15:32:20',
                ],
                [
                    'id' => 5,
                    'user_id' => 1,
                    'shipping_id' => 22,
                    'order_no' => '100004',
                    'shipping_method' => 'Delivery',
                    'payment_method' => 'COD',
                    'payment_status' => 'Pending',
                    'order_status' => 'Pending',
                    'sub_total' => 500.00,
                    'tax' => 0.00,
                    'delivery_charge' => 0.00,
                    'grand_total' => 500.00,
                    'is_active' => 1,
                    'created_at' => '2023-12-18 23:37:33',
                    'updated_at' => '2023-12-18 23:37:33',
                ],
                [
                    'id' => 6,
                    'user_id' => 1,
                    'shipping_id' => 23,
                    'order_no' => '100005',
                    'shipping_method' => 'Delivery',
                    'payment_method' => 'COD',
                    'payment_status' => 'Pending',
                    'order_status' => 'Pending',
                    'sub_total' => 5000.00,
                    'tax' => 0.00,
                    'delivery_charge' => 0.00,
                    'grand_total' => 5000.00,
                    'is_active' => 1,
                    'created_at' => '2023-12-19 00:51:46',
                    'updated_at' => '2023-12-19 00:51:46',
                ],
                [
                    'id' => 7,
                    'user_id' => 1,
                    'shipping_id' => 24,
                    'order_no' => '100006',
                    'shipping_method' => 'Delivery',
                    'payment_method' => 'COD',
                    'payment_status' => 'Pending',
                    'order_status' => 'Delivered',
                    'sub_total' => 700000.00,
                    'tax' => 0.00,
                    'delivery_charge' => 0.00,
                    'grand_total' => 700000.00,
                    'is_active' => 1,
                    'created_at' => '2023-12-20 03:03:46',
                    'updated_at' => '2023-12-24 11:26:03',
                ],
                [
                    'id' => 8,
                    'user_id' => 1,
                    'shipping_id' => 25,
                    'order_no' => '100007',
                    'shipping_method' => 'Delivery',
                    'payment_method' => 'COD',
                    'payment_status' => 'Pending',
                    'order_status' => 'Canceled',
                    'sub_total' => 50000.00,
                    'tax' => 0.00,
                    'delivery_charge' => 0.00,
                    'grand_total' => 50000.00,
                    'is_active' => 1,
                    'created_at' => '2023-12-30 17:05:08',
                    'updated_at' => '2023-12-31 13:19:55',
                ],
                [
                    'id' => 9,
                    'user_id' => 1,
                    'shipping_id' => 26,
                    'order_no' => '100008',
                    'shipping_method' => 'Delivery',
                    'payment_method' => 'COD',
                    'payment_status' => 'Pending',
                    'order_status' => 'Canceled',
                    'sub_total' => 5000.00,
                    'tax' => 0.00,
                    'delivery_charge' => 0.00,
                    'grand_total' => 5000.00,
                    'is_active' => 1,
                    'created_at' => '2024-01-02 19:18:55',
                    'updated_at' => '2024-01-03 12:31:03',
                ],
            ]
        );
    }
}
