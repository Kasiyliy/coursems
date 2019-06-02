<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use SoftDeletes;

    public static $validatesAll = [];

    protected $fillable = [
        'course_id',
        'user_id',
        'content'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
