<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'username' => 'admin',
            'email' => 'admin@travelgo.com',
            'email_verified_at' => '2020-12-01',
            'password' => bcrypt('123123123'),
            'roles' => 'ADMIN',
            'created_at' => '2020-12-01'
        ],
        [
            'username' => 'user',
            'email' => 'user@travelgo.com',
            'email_verified_at' => '2020-12-01',
            'password' => bcrypt('123123123'),
            'roles' => 'USER',
            'created_at' => '2020-12-01'
        ]
    ]);
    }
}
