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
        'started_at',
        'deadline',
        'started',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function users(){
        return $this->belongsToMany('App\User', 'streams_users');
    }
}
