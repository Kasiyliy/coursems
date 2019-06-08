<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StreamUser extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'stream_id',
        'user_id'
    ];

    public function stream()
    {
        return $this->belongsTo(Stream::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
