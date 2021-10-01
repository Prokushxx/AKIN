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
          'price'=>'50000'
        ],
        [
          'c_name'=>'Customer Service',
        'price'=>'60000'
        ],
        [
          'c_name'=>'Administrative Assistance',
          'price'=>'8000'
        ],
        [
          'c_name'=>'Accounting',
          'price'=>'6000',
        ],
        ]);
    }
}
