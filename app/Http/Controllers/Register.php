<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Register extends Controller
{
  function show()
  {
    return view('auth.register');
  }
  function store(Request $req)
  {
    $validator = Validator::make($req->all(), [
      'name' => 'required',
      'email' => 'required|unique:users,email',
      'age' => 'required',
      'pwd' => 'required|min:8|alpha_dash',
      'conpwd' => 'required|same:pwd'
    ], [
      'required' => 'This field cannot be empty',
      'age.min' => 'Only 17 years and older',
      'pwd.min' => 'password must be atleast 8 characters',
      'conpwd.same' => 'Password does not match'
    ]);

    if ($validator->fails()) {
      return redirect()->back()
        ->withErrors($validator)
        ->withInput();
    }
    $mod = new Users;
    $mod->name = $req->name;
    $mod->email = $req->email;
    $mod->age = $req->age;
    $mod->password = Hash::make($req->pwd);
    $mod->save();
    return view('auth\login');
  }
  function show_login()
  {
    return view('auth\login');
  }
  function login(Request $req)
  {
    $val = $req->validate([
      'email' => 'required|email|exists:users,email',
      'pwd' => 'required'
    ], [
      'email.email' => 'The email or password is incorrect',
      'email.exists' => 'Does not match email',
      'required' => 'Please fill out all fields',
      // 'pwd.password' => 'The password is incorrect',
    ]);
  $email=$req->email;
  $password=$req->pwd;
    if (Auth::attempt(['email'=>$email,'password'=>$password])) {
      return view('home');
    } else {
      return  back()->withErrors(['pwd'=>'Incorrect Password']);
    }
  }
}
