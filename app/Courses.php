<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = ['title', 'description', 'instructor', 'duration_hours'];
}
