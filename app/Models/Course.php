<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table='courses';
    protected $fillable=['name','lectures','duration','skill-level','price','language',];
    protected $hidden=['created_at','updated_at'];


    public function users()
    {
         return $this->belongsToMany('app/Models/User','user_courses','user_id','course_id','id','id');
    }

    public function instructors()
    {
         return $this->belongsToMany('app/Models/Instructor','course_instructor','course_id','instructor_id','id','id');
    }

    
    
}
