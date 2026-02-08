<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'id'           => 13,
                'name'         => 'Home Page Slider 1',
                'type'         => 0,
                'title'        => 'Home Page Slider 1',
                'image'        => 'sliders/oRBqrBoCyAbtwwOx3apT0IxXZ.generator2.jpg',
                'redirect_url' => '#',
                'sorting'      => 1,
                'status'       => 1,
                'created_at'   => '2023-12-08 16:00:15',
                'updated_at'   => '2024-06-06 12:55:59'
            ],
            [
                'id'           => 15,
                'name'         => 'Home Page Slider 3',
                'type'         => 0,
                'title'        => 'About Page Slider 3',
                'image'        => 'sliders/edmgrMaD8haL9CW039f5DuzHx.hayashimu (1).png',
                'redirect_url' => '#',
                'sorting'      => 2,
                'status'       => 1,
                'created_at'   => '2023-12-08 16:04:23',
                'updated_at'   => '2024-01-24 17:52:27'
            ],
            [
                'id'           => 19,
                'name'         => 'Home Page Slider 3',
                'type'         => 0,
                'title'        => 'Home Page Slider 3',
                'image'        => 'sliders/Cw5J2DsYcCGhWDzs5e9z765iA.order now (3).png',
                'redirect_url' => '#',
                'sorting'      => 3,
                'status'       => 0,
                'created_at'   => '2023-12-19 13:11:59',
                'updated_at'   => '2024-01-28 11:22:09'
            ],
            [
                'id'           => 26,
                'name'         => 'banner-01',
                'type'         => 1,
                'title'        => 'banner-01',
                'image'        => 'sliders/UknW9woY4q8EhshvwIbA9TQ9z.Hayashimu.png',
                'redirect_url' => 'https://hayashimu.com/products/power-tools',
                'sorting'      => 1,
                'status'       => 1,
                'created_at'   => '2023-12-20 01:41:26',
                'updated_at'   => '2024-01-25 15:27:31'
            ],
            [
                'id'           => 27,
                'name'         => 'banner-02',
                'type'         => 1,
                'title'        => 'banner-02',
                'image'        => 'sliders/7OmwWzWy4KbJvmQwJe0midP0L.Hayashimu (1).png',
                'redirect_url' => 'https://hayashimu.com/products/power-tools',
                'sorting'      => 2,
                'status'       => 1,
                'created_at'   => '2023-12-20 01:41:58',
                'updated_at'   => '2024-01-25 15:26:34'
            ],
            [
                'id'           => 28,
                'name'         => 'banner-03',
                'type'         => 1,
                'title'        => 'banner-03',
                'image'        => 'sliders/VZoQ80faYtBAu4nmpG2lbg4CB.Hayashimu (2).png',
                'redirect_url' => 'https://hayashimu.com/products/power-tools',
                'sorting'      => 3,
                'status'       => 1,
                'created_at'   => '2023-12-20 01:42:25',
                'updated_at'   => '2024-01-25 15:26:29'
            ],
            [
                'id'           => 29,
                'name'         => 'banner-04',
                'type'         => 1,
                'title'        => 'banner-04',
                'image'        => 'sliders/M3SuSc6HfvK4IRww3F7z56CoQ.order now (2).png',
                'redirect_url' => NULL,
                'sorting'      => 4,
                'status'       => 0,
                'created_at'   => '2023-12-20 01:42:59',
                'updated_at'   => '2024-01-26 15:53:38'
            ],
            [
                'id'           => 32,
                'name'         => 'Home Page Slider 4',
                'type'         => 0,
                'title'        => 'Home Page Slider 4',
                'image'        => 'sliders/AVCuW7sPIciXUZsSnJUjJ3fWa.order now (1).png',
                'redirect_url' => '#',
                'sorting'      => 4,
                'status'       => 1,
                'created_at'   => '2023-12-20 11:52:17',
                'updated_at'   => '2024-01-25 19:18:36'
            ],
            [
                'id'           => 33,
                'name'         => 'Home Page Slider 5',
                'type'         => 0,
                'title'        => 'Home Page Slider 5',
                'image'        => 'sliders/iiIxRp8FBd61MxRxoVKOzaHOv.order now (2).png',
                'redirect_url' => '#',
                'sorting'      => 5,
                'status'       => 0,
                'created_at'   => '2023-12-20 12:01:58',
                'updated_at'   => '2024-01-28 11:34:54'
            ],
            [
                'id'           => 34,
                'name'         => 'Home Page Banner 5',
                'type'         => 1,
                'title'        => 'Home Page Banner 5',
                'image'        => 'sliders/QH8WnYUh4ZgbfWBclOxPMTiX0.dsf.jpg',
                'redirect_url' => NULL,
                'sorting'      => 5,
                'status'       => 1,
                'created_at'   => '2023-12-20 12:05:54',
                'updated_at'   => '2024-01-25 16:48:03'
            ],
            [
                'id'           => 35,
                'name'         => 'Home Page Banner 6',
                'type'         => 1,
                'title'        => 'Home Page Banner 6',
                'image'        => 'sliders/XPqjMqh1zoEeyoxzlRAKcHsVW.Digital Marketing.png',
                'redirect_url' => NULL,
                'sorting'      => 6,
                'status'       => 1,
                'created_at'   => '2023-12-20 12:07:40',
                'updated_at'   => '2024-01-25 17:31:58'
            ],
            [
                'id'           => 36,
                'name' => 'About Us 1',
                'type' => 2,
                'title' => 'About Us 1',
                'image' => 'sliders/9FZ07Aww2XLjXxLrU87yQo4va.Hayashimu (3).png',
                'redirect_url' => '#',
                'sorting' => 1,
                'status' => 1,
                'created_at' => '2023-12-20 12:22:31',
                'updated_at' => '2024-01-26 15:54:48'
            ],
            [
                'id'           => 37,
                'name' => 'About Us 2',
                'type' => 2,
                'title' => 'About Us 2',
                'image' => 'sliders/eg7G4YRZ63cwWXdciTkGthsql.new-1.jpg',
                'redirect_url' => '#',
                'sorting' => 2,
                'status' => 1,
                'created_at' => '2023-12-20 12:25:18',
                'updated_at' => '2024-01-25 18:42:34'
            ],
            [
                'id'           => 38,
                'name' => 'About Us 3',
                'type' => 2,
                'title' => 'About Us 3',
                'image' => 'sliders/rKT8NItqwzPIlsxghw8GhD1sG.Hayashimu (6).png',
                'redirect_url' => '#',
                'sorting' => 3,
                'status' => 1,
                'created_at' => '2023-12-21 13:58:09',
                'updated_at' => '2024-01-26 15:54:52'
            ],
            [
                'id'           => 39,
                'name' => 'About Us 4',
                'type' => 2,
                'title' => 'About Us 4',
                'image' => 'sliders/3VRtRtxTwWjjvLXn71fs2H90L.about us 1.png',
                'redirect_url' => '#',
                'sorting' => 4,
                'status' => 1,
                'created_at' => '2023-12-21 13:59:39',
                'updated_at' => '2024-01-26 15:54:56'
            ],
            [
                'id'           => 44,
                'name' => 'Home Page Slider 6',
                'type' => 0,
                'title' => 'Home Page Slider',
                'image' => 'sliders/P9I8SGQ9eESGzCe5uQerzVD3d.hayashimu (6).png',
                'redirect_url' => '#',
                'sorting' => 6,
                'status' => 1,
                'created_at' => '2024-01-10 11:16:27',
                'updated_at' => '2024-01-24 19:02:02'
            ],
            [
                'id'           => 45,
                'name' => 'Home Page Slider 7',
                'type' => 0,
                'title' => 'Home Page Slider 7',
                'image' => 'sliders/INf36NwFEQLawwHxLagUCfRzs.order now.png',
                'redirect_url' => '#',
                'sorting' => 7,
                'status' => 1,
                'created_at' => '2024-01-20 12:51:51',
                'updated_at' => '2024-01-25 19:08:37'
            ],
            [
                'id'           => 46,
                'name' => 'Home Page Slider 8',
                'type' => 0,
                'title' => 'Home Page Slider',
                'image' => 'sliders/f25KVHFe44UVRctzv8v74vEqX.1111111111111111111.jpg',
                'redirect_url' => NULL,
                'sorting' => 8,
                'status' => 1,
                'created_at' => '2024-01-25 20:04:52',
                'updated_at' => '2024-01-25 20:04:52'
            ]
        ];

        Slider::insert($sliders);
    }
}
