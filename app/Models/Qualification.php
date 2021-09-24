<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $primaryKey = 'qual_id';

    protected $fillable = 
    [
      'user_id',
      'subject',
      'exam_body',
      'qualification',
      'grade',
      'year',
    ];

    public function user(){
      $this->belongsTo(User::class,'user_id','qual_id');
    }

}
