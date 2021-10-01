<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Application extends Model
{
    use HasFactory;
    protected $table = 'students';
    
    protected $primaryKey = 'stud_id';
    protected $fillable = [
      'course_id',
      'TRN',
      'firstname',
      'lastname',
      'gender',
      'DOB',
      'email',
      'street',
      'town',
      'country',
      'paymentstatus',
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

 /**
  * Get the user that owns the Application
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
  */
 public function course(): BelongsTo
 {
     return $this->belongsTo(Courses::class,'course_id');
 }

 public function qual(){

   $this->hasMany(Qualification::class);

 } 
}
