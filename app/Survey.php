<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use SoftDeletes;

    public static $validatesAll = [
//        'age' => 'required',
//        'skin_type' => 'required',
//        'skin_tone' => 'required',
//        'skin_photo' => 'required|mimes:jpg,jpeg,png',
//        'skin_problems' => 'required',
//        'tone_pressure' => 'required',
//        'tone_finish' => 'required',
//        'make_type' => 'required',
//        'eye_color' => 'required',
//        'hair_color' => 'required',
//        'emphasize' => 'required',
//        'important' => 'required',
//        'fav_color' => 'required',
//        'outfit' => 'required',
//        'cosmetics' => 'required',
//        'cosmetics_photo' => 'required|mimes:jpg,jpeg,png',
    ];

    protected $fillable = [
        'user_id',
        'age',
        'skin_undertone',
        'skin_type',
        'skin_tone',
        'skin_photo',
        'skin_problems',
        'tone_pressure',
        'tone_finish',
        'make_type',
        'eye_color',
        'hair_color',
        'emphasize',
        'important',
        'fav_color',
        'outfit',
        'cosmetics',
        'cosmetics_photo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}