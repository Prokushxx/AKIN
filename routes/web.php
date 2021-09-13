<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;

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
route::get('/register',[Register::class,'show']);
route::post('/register',[Register::class,'store'])->name('register.save');
route::get('/login',[Register::class,'show_login']);
route::post('/login',[Register::class,'login'])->name('login.info');

