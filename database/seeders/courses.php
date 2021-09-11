<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class courses extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('courses')->insert([[
      'course_name' => 'Web Development'
    ], 
    [
      'course_name' => 'Customer Service'
    ],[
      'course_name' => 'Administrative Assistance'
    ],[
      'course_name' => 'Network Support'
    ],[
      'course_name' => 'House Keeping'
    ]]);
  }
}
