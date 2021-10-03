<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array[] = 
        array(
            'name'=>'codegym',
            'email'=>'codegym@gmail.com',
            'nickname'=>'codegym'
        );
        $array[] = 
        array(
            'name'=>'ichiro',
            'email'=>'ichiro@gmail.com',
            'nickname'=>'イチロー'
        );

        foreach ($array as $value) {
            DB::table('users')->insert([
                'name' => $value['name'],
                'email' => $value['email'],
                'password' => Hash::make('password'),
                'nickname' => $value['nickname'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        // DB::table('users')->insert([
        //     'name' => 'codegym',
        //     'email' => 'codegym@gmail.com',
        //     'nickname' => 'codegym',
        //     'password' => Hash::make('password'),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}
