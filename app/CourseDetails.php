<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseDetails extends Model
{
    protected $fillable = [
        'course_id', 'slot', 'availability',
    ];
}
