<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Support\Facades\DB;
use App\Models\Courses;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function show(){
      return view('admin');
    }

    public function show_applicants(){
      
      $applicants = DB::table('students')
      ->orderBy('courses.c_name','asc')
      ->join('courses','courses.c_id','=','students.course_id')
      ->select('courses.c_name','students.firstname','students.lastname','students.email','students.telephone')
      ->get();

      return view('admin.applicants',['applicants'=> $applicants]);
    }

    public function reject($id){

    }
}
