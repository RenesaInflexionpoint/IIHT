<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentDetails extends Model
{
    protected $fillable = [
        'course_id', 'slot_id', 'uniq_id', 'name', 'email',
    ];
}
