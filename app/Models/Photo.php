<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = 'pics';
    protected $primaryKey = 'pic_id';
  
    // protected function getApply(){
    //   return $this->belongsTo('App\Application','id','pic_id');
    // }
}
