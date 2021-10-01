<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Courses;
use Stripe;

use Illuminate\Http\Request;
use Stripe\Stripe as StripeStripe;
use App\Models\Payment;

class PaymentController extends Controller
{
  // public function payment(){
  //   // $userId = auth()->user()->id;
  //   $courses = Courses::all();

  //   return view('payment',compact('courses'));
  // }   
  public function paymentPost(Request $req)
  {
    Payment::create([
      'user_id'=>auth()->user()->id,
      'course_id'=> $req->course,
      'cardnumber'=> $req->cardnumber,
      'cvc'=> $req->cvc,
      'expirationdate'=> $req->expirationdate,
    ]);

    // Application::find($id);
    
    return back();
  }
}
