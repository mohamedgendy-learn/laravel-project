<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $table='instructors';
    protected $fillable=['name','email'];
    protected $hidden=['created_at','updated_at'];

    public function instructors()
    {
         return $this->belongsToMany('app/Models/Course','course_instructor','course_id','instructor_id','id','id');
    }
    
    
}
