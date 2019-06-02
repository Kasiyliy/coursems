<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use SoftDeletes;

    public static $validatesAll = [];

    protected $fillable = [
        'user_id',
    ];

    public function homeworks()
    {
        return $this->belongsTo(Homework::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
