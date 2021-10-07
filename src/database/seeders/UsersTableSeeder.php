<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "aaa",
            'password' => "aaa",
            'nickname' => "aaa",
            'icon_image' => "/public/image",
            'email' => "aaa@gmail.com",

        ]);

    }
}
