<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public static $validatesAll = [
        'stream_id',
        'user_id',
        ];

    protected $fillable = [
        'stream_id',
        'user_id',
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
