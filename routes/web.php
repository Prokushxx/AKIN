<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Apply;
use App\Http\Middleware\Login;
use App\Http\Controllers\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

route::view('/courses','courses\home');
route::get('/login',[Register::class,'show_login']);
route::post('/login',[Register::class,'login'])->name('login.info');
route::get('/register',[Register::class,'show']);
route::post('/register',[Register::class,'store'])->name('register.save');

  Route::group(['middleware'=>['login']], function () {
  route::get('/apply',[Apply::class,'show_apply']);
  route::post('/apply',[Apply::class,'store_student'])->name('student.apply');
  route::post('/apply/qual',[Apply::class,'qual_store'])->name('store.qual');
});
route::get('/logout',[Register::class,'logout'])->name('logout');

route::get('/media',function(){
  return view('media');
});


Route::middleware(['middleware'=> ['Admmin']])->group(function () {
  route::get('admin',[Admin::class,'show'])->name('admin.show');
  route::post('admin/{id}/apply',[Admin::class,'accept'])->name('admin.accept');
  route::post('admin/{id}/apply',[Admin::class,'regect'])->name('admin.regect');
  route::get('user',[Admin::class,'show_user'])->name('user.show');
  route::delete('admin/{id}/user',[Admin::class,'delete'])->name('admin.delete');
});





