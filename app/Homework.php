<?php

namespace App;
use SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    public static $validatesAll = [];

    protected $fillable = [
        'lesson_id',
        'user_id'
    ];

    public function lessons()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
