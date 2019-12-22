<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{

    public function finish(Request $request)
    {
        $transaction = new Transaction();
        $transaction->fill($request->all());

        $array = explode('=', "$request->label=");
        $user_id = $array[0];
        $course_id = $array[1];

        $transaction->user_id = $user_id;
        $transaction->course_id = $course_id;

        Subscription::create([
            'user_id' => $user_id,
            'course_id' => $course_id,
            'status' => 1,
        ]);

        $transaction->save();
        Session::flash('success', 'Курс успешно оплачен!');

        return response('', 200);
    }


    public function migrateRefresh(Request $request)
    {
        if ($request->token == 'kasya') {
            return Artisan::call('migrate:refresh');
        } else {
            return 'fail';
        }
    }

    public function clearAutoLoad(Request $request)
    {
        if ($request->token == 'kasya') {
            return Artisan::call('clear-compiled ') && Artisan::call('php artisan optimize');
        } else {
            return 'fail';
        }
    }

    public function migrate(Request $request)
    {
        if ($request->token == 'kasya') {
            return Artisan::call('migrate');
        } else {
            return 'fail';
        }
    }

    public function keyGenerate(Request $request)
    {
        if ($request->token == 'kasya') {
            return Artisan::call('key:generate');
        } else {
            return 'fail';
        }
    }

    public function configCache(Request $request)
    {
        if ($request->token == 'kasya') {
            return Artisan::call('config:cache');
        } else {
            return 'fail';
        }
    }

    public function dbSeed(Request $request)
    {
        if ($request->token == 'kasya') {
            return Artisan::call('db:seed');
        } else {
            return 'fail';
        }
    }


}
