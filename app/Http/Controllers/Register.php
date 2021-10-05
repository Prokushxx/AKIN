<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

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
    $mod = new User;
    $mod->username = $req->name;
    $mod->email = $req->email;
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
      'email.email' => 'The Email is Incorrect',
      'email.exists' => 'Does not match email',
      'required' => 'Please fill out all fields',
      // 'pwd.password' => 'The password is incorrect',
    ]);
    $email = $req->email;
    $password = $req->pwd;

    if (Auth::attempt(['email' => $email, 'password' => $password])) {

      if (auth()->user()->Active_flag == 1) {

        $req->session()->put('user', $email);

        if ($req->session()->has('user')) {

          if (auth()->user()->User_type == 'Admin') {

            return redirect('admin');
          } else {
            return redirect('/');
          }
        }
      } else {
        return redirect()->back()->with('Restrict','Your Account has been Disabled');
      }
    } else {
      return  back()->withErrors(['pwd' => 'Password Incorrect']);
    }
  }

  //Log out function
  public function logout(Request $req)
  {
    if ($req->session()->has('user')) {
dd($req);
      $req->session()->flush();
      return redirect('/login');  
    }
  }
}
