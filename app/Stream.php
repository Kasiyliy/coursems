<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stream extends Model
{
    use SoftDeletes;

    public static $validatesAll = [];

    protected $fillable = [
        'name',
        'course_id',
        'deadline'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
