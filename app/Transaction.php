<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    public static $validatesAll = [];

    protected $fillable = [
        'operation_id',
        'user_id',
        'course_id',
        'withdraw_amount',
        'amount',
        'label',
        'sha1_hash',
        'unaccepted',
    ];
}