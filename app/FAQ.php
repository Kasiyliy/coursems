<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    public static $validatesAll = [];

    protected $table = 'faqs';

    protected $fillable = [
        'question',
        'answer'
    ];
}
