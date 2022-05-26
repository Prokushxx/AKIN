<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Register;
use App\Http\Controllers\Apply;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Coursecontroller;
use App\Http\Controllers\Mailing;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\XML;
use App\Mail\Contactmail;
use App\Models\Application;
use App\Models\Testimonial;
use App\Models\User;
// use Illuminate\Support\Facades\DB;

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
  // new Contactmail();
  // mail::to('takinyene@gmail.com')->send(new Contactmail());
  $comments=Testimonial::with('user')->latest()->first();
  // dd($comments);
  return view('home',['comments'=>$comments]);  
 });

route::get('/course',[Coursecontroller::class,'show_courses'])->name('course.show');
route::get('/logout',[Register::class,'logout'])->name('logout');
// route::get('/media',function(){return view('media');});

//Validate and Store Registration
route::get('/login',[Register::class,'show_login'])->name('login');
route::post('/login/info',[Register::class,'login'])->name('login.info');
route::get('/register',[Register::class,'show']);
route::post('/register',[Register::class,'store'])->name('register.save');

//Application Middleware
Route::group(['middleware'=>['login']], function () {
  route::get('/apply',[Apply::class,'show_apply']);
  route::post('/apply',[Apply::class,'store_student'])->name('student.apply');
  route::post('/apply/qual',[Apply::class,'qual_store'])->name('store.qual');
  route::get('/apply/{id}/show',[Apply::class,'show_update'])->name('update.show');
  route::post('/apply/{id}/update',[Apply::class,'add_update'])->name('update.address');
  //Comments
  route::post('/apply/comment',[TestimonialController::class,'add_comment'])->name('add.comment');
  route::post('/checkout',[PaymentController::class,'paymentPost'])->name('payment.post');
});

//Admin Middleware 
Route::group(['middleware'=> ['admin']], function () {
route::get('/admin',[Admincontroller::class,'show'])->name('admin.show');
//VIEW APPLICATIONS
route::get('/applicants',[Admincontroller::class,'show_applicants'])->name('applicants.show');
route::get('/applicants/{id}',[Admincontroller::class,'applicants_info'])->name('applicants.info');
route::post('/admin/{id}/accept',[Admincontroller::class,'accept'])->name('admin.accept');
route::post('/admin/{id}/reject',[Admincontroller::class,'regect'])->name('admin.reject');
//VIEW USERS
route::get('/users',[Admincontroller::class,'show_user'])->name('user.show');
route::post('/user/{id}active',[Admincontroller::class,'if_active'])->name('user.active');
route::post('/user/{id}/notactive',[Admincontroller::class,'if_notactive'])->name('user.notactive');
//VIEW COURSES
route::get('course/show',[Admincontroller::class,'show_course'])->name('show.course');
route::post('course/add',[Admincontroller::class,'add_course'])->name('add.course');
route::delete('course/{id}/delete',[Admincontroller::class,'delete_course'])->name('delete.course');
//DOWNLOADXML
route::get('/studentxml',[XML::class,'xml'])->name('xml')->name('xml.download');
});
//XML CONFIGURATION
//   route::get('contact',function(){
//   mail::to('takinyene@gmail.com')->send(new Contactmail());
//   return new Contactmail();
// });

route::post('mail',[Mailing::class,'send_mail'])->name('send.mail');