<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function add_comment(Request $req){
     Testimonial::create([
       'comments'=>$req->comment,
       'user_id'=>auth()->user()->id,
     ]);
     return redirect()->back();
    }
}
