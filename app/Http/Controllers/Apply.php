<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Validator;
use App\Models\Photo;
// use Illuminate\Support\Facades\Hash;

class Apply extends Controller
{
  function show_apply()
  {
    return view('auth.apply');
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
        'course' => 'required',
        'DOB' => 'required',
        'email' => 'required|unique:students,email',
        'street' => 'required',
        'town' => 'required',
        'country' => 'required',
        'parish' => 'required',
        'telephone' => 'required',
      ],
      [
        'required' => '*This field cannot be empty',
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
    $tbl->DOB = $req->DOB;
    $tbl->email = $req->email;
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
    ], [
      'required' => '*This field cannot be empty'
    ]);
    if ($validate->fails()) {
      return redirect()->back()
        ->withErrors($validate)
        ->withInput();
    }
  }
}
