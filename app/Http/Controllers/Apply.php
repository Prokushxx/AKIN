<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Courses;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Photo;
use App\Models\Qualification;
use Database\Seeders\courses as SeedersCourses;

// use Database\Seeders\courses;

// use Illuminate\Support\Facades\Hash;

class Apply extends Controller
{
  function show_apply()
  {
  $courses= Courses::with('stud')->get();
  $studentpic = User::with('pics')->get();
  // $stud = Application::find($id);

    return view('auth.apply',compact('courses','studentpic'));
  }
  function store_student(Request $req)
  {
    $val = Validator::make(
      $req->all(),
      [
        'TRN' => 'required',
        'fname' => 'required',
        'lname' => 'required',
        'gender' => 'required',
        'courses' => 'required',
        'DOB' => 'required',
        'email' => 'required|unique:students,email',
        'street' => 'required',
        'town' => 'required',
        'country' => 'required',
        'parish' => 'required',
        'telephone' => 'required',      ],
      [
        'email.unique' => 'This field already exists' 
      ]
    );
  

    if ($val->fails()) {
      return redirect()->back()
        ->withErrors($val)
        ->withInput();
    }
    $tbl = new Application;
    $tbl->TRN = $req->TRN;
    $tbl->firstname = $req->fname;
    $tbl->lastname = $req->lname;
    $tbl->gender = $req->gender;
    $tbl->course_id = $req->courses;
    $tbl->DOB = $req->DOB;
    $tbl->email = auth()->user()->email;
    $tbl->street = $req->street;
    $tbl->town = $req->town;
    $tbl->country = $req->country;
    $tbl->parish = $req->parish;
    $tbl->telephone = $req->telephone;
    $tbl->save();

    $photoname = $req->file('photo')->getClientOriginalName();
    $location = $req->file('photo')->storeAs('public/PHOTO', $photoname);
    $pics = new Photo;
    $pics->pic_name = $photoname;
    $pics->pic_location = $location;
    $pics->users_id = auth()->user()->id;
    $pics->save();
    return redirect()->back();
  }
  function qual_store(Request $req)
  {
    $validate = Validator::make($req->all(), [

      'subject' => 'required',
      'exam' => 'required',
      'qual' => 'required',
      'grade' => 'required',
      'year' => 'required',
    ], 
    [
      'required' => '*This field cannot be empty'
    ]);


    if ($validate->fails()) {
      return redirect()->back()
        ->withErrors($validate)
        ->withInput();
    }
    Qualification::create([
      'subject'=> $req->subject,
      'exam_body'=> $req->exam,
      'qualification'=> $req->qual,
      'grade'=> $req->grade,
      'user_id'=>auth()->user()->id,
      'year'=> $req->year,
    ]);

    return redirect()->back();
  }
  public function show_update($id){
    $students = DB::table('students')
    ->join('users','users.email','=','students.email')
    ->select('*')
    ->where('users.id',$id)
    ->get();
    return view('auth.editstud',['students'=>$students]);
  }

  public function add_update(Request $request,$id){
    $updatestudent = Application::where('stud_id',$id)->update([
      'street'=>$request->street,
      'town'=>$request->town,
      'country'=>$request->country,
      'parish'=>$request->parish,
      'telephone'=>$request->telephone,
    ]);
    
    // DB::table('students')
    // ->join('users','users.email','=','students.email')
    // ->select('*')
    // ->where('users.id',$id)
    // ->update([
    //     'street'=>$request->street,
    //     'town'=>$request->town,
    //     'country'=>$request->country,
    //     'parish'=>$request->parish,
    //     'telephone'=>$request->telephone
    //   ]);

    return redirect()->route('update.show',auth()->user()->id);
  }
}