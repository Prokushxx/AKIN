<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = 'pics';
    protected $primaryKey = 'pic_id';

    protected $fillable = [
      'users_id',
      'pic_name',
      'pic_location',
    ];
  
    // protected function getApply(){
    //   return $this->belongsTo('App\Application','id','pic_id');
    // }
    protected function users(){
     return $this->belongsTo(User::class,'users_id','pic_id');
    }
}
