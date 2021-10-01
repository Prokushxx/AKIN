<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Support\Facades\DB;
use App\Models\Courses;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Finder\Finder;

class Admincontroller extends Controller
{
    public function show(){
      return view('admin');
    }

    public function show_applicants(){
      
      $applicants = DB::table('students')
      ->orderBy('courses.c_name','asc')
      ->join('courses','courses.c_id','=','students.course_id')
      ->select('*')
      ->get();

      return view('admin.applicants',['applicants'=> $applicants]);
    }


    public function applicants_info($id){

        // $students = Application::Find($id);
        $students = DB::table('students')
        ->join('users','students.email','=','users.email')
        ->join('qualifications','qualifications.user_id','=','users.id')
        ->join('courses','courses.c_id','=','students.course_id')
        ->join('pics','pics.users_id','=','users.id')
        ->where('stud_id',$id)
        ->select('*')
        ->get();

   
        return view('admin.studentinfo',['students'=>$students]);
    }

    public function show_user(){

     $user = User::where('User_type','user')->paginate(3);
     return view('admin.user',['user'=>$user]);
    }

    public function if_active(Request $req, $id){
     $user = User::find($id);
     $user->Active_flag = $req->idk;
     $user->update();
     return redirect()->back();

    }
    public function if_notactive(Request $req, $id){
      $user = User::find($id);
      $user->Active_flag = $req->ik;
      $user->update();
      return redirect()->back();
     }

     public function show_course(){
       $courses = Courses::paginate(3);
       return view('admin.course',['courses'=>$courses]);
     }
     public function delete_course($id){
       $coursedelete = Courses::Find($id);
       $coursedelete->delete();

       return redirect()->back();
     }
     public function add_course(Request $req){

       $validate = $req->validate([
       'cname'=>'unique:courses,c_name',
       'cprice'=>'unique:courses,price',
     ],[
       'unique'=>'*This Course already exists'
     ]);
     if($validate){
      Courses::create([
        'c_name'=>$req->cname,
        'price'=>$req->cprice,
      ]);
      return redirect()->back();

       }
       else{  
         return redirect()->back()->withErrors($validate);
       }
     }
}
