<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Contactmail;
use Illuminate\Http\Request;


class Mailing extends Controller
{
  
  public function send_mail(Request $req){

    // $info=Mail::create([
    //   'email'=>$req->email,
    //   'message'=>$req->message,
    // ]);

    $info = [
    'email'=>$req->email,
    'message'=>$req->message,
    ];

    new Contactmail($info);
      Mail::to('takinyene@gmail.com')->send(new Contactmail($info));

      return redirect()->back();
  }

}
