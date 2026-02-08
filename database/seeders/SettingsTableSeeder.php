<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $settings = [
    [
        'id' => 1,
        'key' => 'site_name',
        'value' => 'HAYASHIMU MACHINERY CO., LTD',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-12-24 12:24:37',
    ],
    [
        'id' => 2,
        'key' => 'site_title',
        'value' => 'HAYASHIMU MACHINERY',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2024-06-10 18:57:13',
    ],
    [
        'id' => 3,
        'key' => 'default_email_address',
        'value' => 'sales.hayashimu@hotmail.com',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-12-19 14:55:30',
    ],
    [
        'id' => 4,
        'key' => 'site_logo',
        'value' => 'settings/Echm3QDBT3GiJp7kSEVYg06AZ.HAYASHIMU R.png',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2024-09-05 19:16:29',
    ],
    [
        'id' => 5,
        'key' => 'site_favicon',
        'value' => 'settings/N4yQSTRBQS8dbWz8l8DMJTYtV.gfggh.jpg',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2024-01-08 23:55:51',
    ],
    [
        'id' => 6,
        'key' => 'footer_copyright_text',
        'value' => 'HAYASHIMU MACHINERY CO., LTD',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2024-01-01 12:46:43',
    ],
    [
        'id' => 7,
        'key' => 'seo_meta_title',
        'value' => '',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-06-10 01:20:49',
    ],
    [
        'id' => 8,
        'key' => 'seo_meta_description',
        'value' => '',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-06-10 01:20:49',
    ],
    [
        'id' => 9,
        'key' => 'social_facebook',
        'value' => 'www.facebook.com/hayashimu.machinery',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-12-24 17:20:38',
    ],
    [
        'id' => 10,
        'key' => 'social_instagram',
        'value' => 'www.instagram.com/hayashimu.machinery',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-12-24 17:20:38',
    ],
    [
        'id' => 11,
        'key' => 'social_youtube',
        'value' => 'www.youtube.com/@HayashimuLTD',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-12-24 17:20:04',
    ],
    [
        'id' => 12,
        'key' => 'social_twitter',
        'value' => 'twitter.com/HayashimuLTD',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-12-24 17:20:38',
    ],
    [
        'id' => 13,
        'key' => 'social_linkedin',
        'value' => 'www.linkedin.com/',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-12-10 06:14:49',
    ],
    [
        'id' => 14,
        'key' => 'google_analytics',
        'value' => "<!-- Google tag (gtag.js) -->\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-S0BF0TNGZM\"></script>\n<script>\n  window.dataLayer = window.dataLayer || [];\n  function gtag(){dataLayer.push(arguments);}\n  gtag('js', new Date());\n\n  gtag('config', 'G-S0BF0TNGZM');\n</script>",
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2025-10-16 17:23:39',
    ],
    [
        'id' => 15,
        'key' => 'google_tag_manager',
        'value' => '',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2024-07-15 10:56:37',
    ],
    [
        'id' => 16,
        'key' => 'facebook_pixels',
        'value' => "<script src=\"https://static.elfsight.com/platform/platform.js\" data-use-service-core defer></script>\n<div class=\"elfsight-app-311b4fa8-adda-4f31-9c07-7915a07b2547\" data-elfsight-app-lazy></div>",
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2024-05-21 18:39:50',
    ],
    [
        'id' => 17,
        'key' => 'mobile',
        'value' => '+86-166 8050 8479, +86-579-6566955',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-12-19 14:55:30',
    ],
    [
        'id' => 18,
        'key' => 'phone',
        'value' => '+86 579 6371666',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-12-19 14:55:30',
    ],
    [
        'id' => 19,
        'key' => 'address_1',
        'value' => 'Room 301, 118 Block, Changchun 8th Street, Futian, Yiwu City, China',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-12-19 14:55:30',
    ],
    [
        'id' => 20,
        'key' => 'address_2',
        'value' => '',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-12-26 17:57:43',
    ],
    [
        'id' => 21,
        'key' => 'footer_logo',
        'value' => '',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2023-06-10 01:20:49',
    ],
    [
        'id' => 22,
        'key' => 'popup',
        'value' => 'settings/XGwRJe0xjYq4oV385YWHP8spF.logo.jpg',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2024-01-11 19:49:22',
    ],
    [
        'id' => 23,
        'key' => 'is_popup_active',
        'value' => '0',
        'created_at' => '2023-06-10 01:20:49',
        'updated_at' => '2024-01-11 19:49:22',
    ],
    [
        'id' => 24,
        'key' => 'popup_url',
        'value' => 'https://hayashimu.com/product/detail/apd220a-diesel-generator',
        'created_at' => null,
        'updated_at' => '2024-01-11 19:48:46',
    ],
    [
        'id' => 25,
        'key' => 'messenger_script',
        'value' => '',
        'created_at' => '2023-12-24 09:17:12',
        'updated_at' => '2024-07-15 10:57:05',
    ],
];

        Setting::insert($settings);
    }
}
