<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $primaryKey = 'c_id';
    
    protected $fillable = [
      'c_name',
      'price'
    ];

    /**
     * Get all of the students for the Courses
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stud(): HasMany
    {
        return $this->hasMany(Application::class,'course_id');
    }
}
