<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class Coursecontroller extends Controller
{
    public function show_courses(){
     $courses = Courses::all();

     return view('courses.home',['courses'=>$courses]);
    }
}
