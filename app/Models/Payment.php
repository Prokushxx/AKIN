<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'course_id',
      'paymentstatus',
      'cardnumber',
      'cvc',
      'expirationdate',
    ];

    protected $hidden = [
      'cardnumber',
      'cvc',
      'expirationdate',
    ];


    protected function user ()
    {
      return $this->belongsTo(User::class);
    }

    protected function course ()
    {
      return $this->belongsTo(Courses::class,'c_id');
    }
}
