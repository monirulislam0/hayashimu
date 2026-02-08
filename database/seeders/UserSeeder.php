<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id'                => 1,
                'name'              => 'Ismail Hossen',
                'email'             => 'hossenismail29@gmail.com',
                'email_verified_at' => '2023-06-10 01:20:49',
                'password'          => Hash::make('user1234'),
                'phone'             => '01788111408',
                'remember_token'    => 'kfMT0HiewAI0ljzpG52Rfbwjv9ltjHSXm7ANanZkP9MmHIv2Kcvgr5BBlqsT',
                'created_at'        => '2023-06-10 01:20:49',
                'updated_at'        => '2023-06-23 14:39:57'
            ]
        ];
        User::insert($users);
    }
}
