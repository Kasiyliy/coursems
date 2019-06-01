<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    public static $validatesAll = [
        'name' =>'required|max:255',
        'description'=> 'required',
        'video_path' => 'required|mimes:jpg,jpeg,png',
    ];

    public static $validatesOnlyVideo = [
        'video_path' => 'required|mimes:jpg,jpeg,png',
    ];

    public static $validatesWithoutVideo = [
        'name' =>'required|max:255',
        'description'=> 'required',
        'price' => 'required|numeric',
    ];

    protected $fillable = [
        'name',
        'description',
        'video_path',
    ];

}
