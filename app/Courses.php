<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'name', 'price', 'class_no', 'duration',
    ];
}
