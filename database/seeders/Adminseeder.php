<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'username'=>'Admin',
        'email'=>'admin@gmail.com',
        'User_type'=>'Admin',
        'password'=>Hash::make('Admin123'),
        ]);
    }
}
