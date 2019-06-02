<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    public static $validatesAll = [
        'name' => 'required|max:255',
        'description' => 'required',
        'course_id' => 'required|numeric',
        'video_path' => 'required',
    ];

    public static $validatesOnlyVideo = [
        'video_path' => 'required',
    ];

    public static $validatesWithoutVideo = [
        'name' => 'required|max:255',
        'description' => 'required',
        'course_id' => 'required|numeric',
    ];

    protected $fillable = [
        'name',
        'description',
        'video_path',
        'course_id',
    ];


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
