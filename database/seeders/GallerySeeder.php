<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([[
            'travel_packages_id' => '1',
            'image' => 'images/1a.webp',
        ],
        [
            'travel_packages_id' => '1',
            'image' => 'images/1b.webp',
        ],
        [
            'travel_packages_id' => '1',
            'image' => 'images/1c.webp',
        ],
        [
            'travel_packages_id' => '2',
            'image' => 'images/2a.webp',
        ],
        [
            'travel_packages_id' => '2',
            'image' => 'images/2b.webp',
        ],
        [
            'travel_packages_id' => '2',
            'image' => 'images/2c.webp',
        ],
        [
            'travel_packages_id' => '3',
            'image' => 'images/3a.webp',
        ],
        [
            'travel_packages_id' => '3',
            'image' => 'images/3b.webp',
        ],
        [
            'travel_packages_id' => '3',
            'image' => 'images/3c.webp',
        ],
        [
            'travel_packages_id' => '4',
            'image' => 'images/4a.webp',
        ],
        [
            'travel_packages_id' => '4',
            'image' => 'images/4b.webp',
        ],
        [
            'travel_packages_id' => '4',
            'image' => 'images/4c.webp',
        ],
        [
            'travel_packages_id' => '5',
            'image' => 'images/5a.webp',
        ],
        [
            'travel_packages_id' => '5',
            'image' => 'images/5b.webp',
        ],
        [
            'travel_packages_id' => '6',
            'image' => 'images/6a.webp',
        ],
        [
            'travel_packages_id' => '6',
            'image' => 'images/6b.webp',
        ],
        [
            'travel_packages_id' => '7',
            'image' => 'images/7a.webp',
        ],
        [
            'travel_packages_id' => '7',
            'image' => 'images/7b.webp',
        ],
        [
            'travel_packages_id' => '8',
            'image' => 'images/8a.webp',
        ],
        [
            'travel_packages_id' => '8',
            'image' => 'images/8b.webp',
        ],
    ]);
    }
}
