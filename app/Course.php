<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{

    use SoftDeletes;

    public static $validatesAll = [
        'name' =>'required|max:255',
        'description'=> 'required',
        'price' => 'required|numeric',
        'image_path' => 'required|mimes:jpg,jpeg,png',
    ];

    public static $validatesOnlyImage = [
        'image_path' => 'required|mimes:jpg,jpeg,png',
    ];

    public static $validatesWithoutImage = [
        'name' =>'required|max:255',
        'description'=> 'required',
        'price' => 'required|numeric',
    ];

    protected $fillable = [
        'name',
        'description',
        'image_path',
        'price'
    ];

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }

}
