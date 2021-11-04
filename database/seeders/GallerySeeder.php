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
            'image' => '1a.webp',
        ],
        [
            'travel_packages_id' => '1',
            'image' => '1b.webp',
        ],
        [
            'travel_packages_id' => '1',
            'image' => '1c.webp',
        ],
        [
            'travel_packages_id' => '2',
            'image' => '2a.webp',
        ],
        [
            'travel_packages_id' => '2',
            'image' => '2b.webp',
        ],
        [
            'travel_packages_id' => '2',
            'image' => '2c.webp',
        ],
        [
            'travel_packages_id' => '3',
            'image' => '3a.webp',
        ],
        [
            'travel_packages_id' => '3',
            'image' => '3b.webp',
        ],
        [
            'travel_packages_id' => '3',
            'image' => '3c.webp',
        ],
        [
            'travel_packages_id' => '4',
            'image' => '4a.webp',
        ],
        [
            'travel_packages_id' => '4',
            'image' => '4b.webp',
        ],
        [
            'travel_packages_id' => '4',
            'image' => '4c.webp',
        ],
        [
            'travel_packages_id' => '5',
            'image' => '5a.webp',
        ],
        [
            'travel_packages_id' => '5',
            'image' => '5b.webp',
        ],
        [
            'travel_packages_id' => '6',
            'image' => '6a.webp',
        ],
        [
            'travel_packages_id' => '6',
            'image' => '6b.webp',
        ],
        [
            'travel_packages_id' => '7',
            'image' => '7a.webp',
        ],
        [
            'travel_packages_id' => '7',
            'image' => '7b.webp',
        ],
        [
            'travel_packages_id' => '8',
            'image' => '8a.webp',
        ],
        [
            'travel_packages_id' => '8',
            'image' => '8b.webp',
        ],
    ]);
    }
}
