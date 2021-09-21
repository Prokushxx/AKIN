<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'students';
    
    protected $fillable = [
      'c_id',
      'TRN',
      'firstname',
      'lastname',
      'gender',
      'DOB',
      'email',
      'street',
      'town',
      'country',
      'parish',
      'telephone',
    ];

    protected $hidden = [
      'TRN',
    ];

//     protected function photo() {
//    return $this->hasOne('App\Http\Models\Photo','pic_id','id');
//     }

//     protected function getcourses(){
//       return $this->hasOne('App\Http\Models\Courses','c_id','id');
//     }
}
