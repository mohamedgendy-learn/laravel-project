<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_course extends Model
{
    use HasFactory;
    protected $table='user_courses';
    protected $fillable=['user_id','course_id'];
    protected $hidden=['created_at','updated_at'];
}
