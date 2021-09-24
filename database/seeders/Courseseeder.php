<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Courseseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
        [
          'c_name'=>'Network Support',
        ],
        [
          'c_name'=>'Customer Service',
        ],
        [
          'c_name'=>'Administrative Assistance',
        ],
        [
          'c_name'=>'Accounting',
        ],
        ]);
    }
}
