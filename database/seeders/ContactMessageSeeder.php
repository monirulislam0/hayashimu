<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ContactMessage::insert([
            [
                'id' => 1,
                'name' => 'Md Ismail',
                'mobile' => '01788111408',
                'email' => 'admin@example.com',
                'country_name' => null,
                'company_name' => null,
                'message' => 'Lorem IPshum isset',
                'action' => 'Pending',
                'created_at' => '2023-12-10 02:11:59',
                'updated_at' => '2023-12-10 02:11:59',
            ],
            [
                'id' => 2,
                'name' => 'Ismail',
                'mobile' => '01788111408',
                'email' => 'admin@example.com',
                'country_name' => null,
                'company_name' => null,
                'message' => 'Lorem Ipshum isset.',
                'action' => 'Pending',
                'created_at' => '2023-12-10 02:14:45',
                'updated_at' => '2023-12-10 02:14:45',
            ],
            [
                'id' => 3,
                'name' => 'Ismail',
                'mobile' => '01799111408',
                'email' => 'ismail@gmail.com',
                'country_name' => null,
                'company_name' => null,
                'message' => 'Lorem Ipshum isset',
                'action' => 'Pending',
                'created_at' => '2023-12-10 02:17:06',
                'updated_at' => '2023-12-10 02:17:06',
            ],
            [
                'id' => 4,
                'name' => 'Md Ismail',
                'mobile' => '01788111408',
                'email' => 'admin@example.com',
                'country_name' => 'Bangladesh',
                'company_name' => null,
                'message' => 'Lorem IPshum isset',
                'action' => 'Pending',
                'created_at' => '2023-12-10 06:21:15',
                'updated_at' => '2023-12-10 06:21:15',
            ],
            [
                'id' => 5,
                'name' => 'Md. Ismail',
                'mobile' => '01881114098',
                'email' => 'admin@example.com',
                'country_name' => 'Bangladesh',
                'company_name' => null,
                'message' => 'Lorem Ipshum isset',
                'action' => 'Pending',
                'created_at' => '2023-12-10 06:22:14',
                'updated_at' => '2023-12-10 06:22:14',
            ],
            [
                'id' => 6,
                'name' => 'Ismail',
                'mobile' => '01788111408',
                'email' => 'hossenismail@gmail.com',
                'country_name' => 'Bangladesh',
                'company_name' => null,
                'message' => 'Lorem ipshum isset',
                'action' => 'Pending',
                'created_at' => '2023-12-11 01:18:03',
                'updated_at' => '2023-12-11 01:18:03',
            ],
            [
                'id' => 7,
                'name' => 'bahar',
                'mobile' => '01258289972',
                'email' => 'fgfdgfg@ghfhj',
                'country_name' => 'bangladesh',
                'company_name' => null,
                'message' => 'fgjyyujj',
                'action' => 'Pending',
                'created_at' => '2023-12-23 13:28:11',
                'updated_at' => '2023-12-23 13:28:11',
            ],
            [
                'id' => 8,
                'name' => 'uddin',
                'mobile' => '01875255851',
                'email' => 'absdjcfhsdui@gadjfjds',
                'country_name' => 'China',
                'company_name' => null,
                'message' => 'EBIC TOOLS CO., LTD, ESTABLISHED IN 2003, OUR BRAND FIXTEC IS EQUIPPED WITH A DIY, SEMI INDUSTRIAL AND INDUSTRIAL PORTFOLIO...',
                'action' => 'Pending',
                'created_at' => '2023-12-23 13:29:18',
                'updated_at' => '2023-12-23 13:29:18',
            ],
            [
                'id' => 9,
                'name' => 'Bahar',
                'mobile' => '01873242030',
                'email' => 'techmerlin45@gmail.com',
                'country_name' => 'Bangladesh',
                'company_name' => null,
                'message' => 'Hello',
                'action' => 'Pending',
                'created_at' => '2024-01-03 13:50:56',
                'updated_at' => '2024-01-03 13:50:56',
            ],
            [
                'id' => 10,
                'name' => 'Mr X',
                'mobile' => '01788111408',
                'email' => 'admin@example.com',
                'country_name' => null,
                'company_name' => 'Test Software',
                'message' => 'Lorem Ipshum isset.',
                'action' => 'Pending',
                'created_at' => '2024-02-22 00:09:56',
                'updated_at' => '2024-02-22 00:09:56',
            ],
        ]);
    }
}
