<?php

namespace App\Http\Controllers;

use Validator;
use Session;
use App\Course;
use App\Order;
use App\Stream;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StreamController extends Controller
{
    public function index()
    {
        $streams = Stream::all();
        return view('admin.streams.index', compact("streams"));
    }

    public function details($id)
    {
        $stream = Stream::find($id);
//        $orders = DB::table('orders')->where('stream_id', $id)->get();
        $orders = DB::table('orders')->leftJoin('users', 'orders.user_id', '=', 'users.id')->where('stream_id', $id)->get();

        if ($stream) {
            return view('admin.streams.details', compact("orders", "stream"));
        } else {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }
    }

    public function create()
    {
        $courses = DB::table('courses')->where('visible', true)->get();
        return view('admin.streams.create', compact("courses"));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Stream::$validatesAll);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $stream = new Stream();
            $stream->fill($request->all());
//            $stream->deadline = date('Y-m-d', strtotime($stream->started_date . ' +30 day'));
            $stream->save();
            Session::flash('success', 'Элемент успешно добавлен!');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $stream = Stream::find($id);
        $courses = Course::all();
        $users = User::all();
        if (!$stream) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }
        return view('admin.streams.edit', compact('stream', 'courses', 'users'));
    }

    public function update(Request $request, $id)
    {
        $stream = Stream::find($id);
        if (!$stream) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        $validator = Validator::make($request->all(), Stream::$validatesAll);

        if ($validator->fails()) {
            Session::flash('error', 'Ошибка!');
            return redirect()->back()->withErrors($validator);
        } else {
            $stream->fill($request->all());
            $stream->save();
            Session::flash('success', 'Элемент успешно обновлен!');
            return redirect()->back();
        }
    }

    public function started($id)
    {
        $stream = Stream::findOrFail($id);
        if ($stream->started) {
            $stream->started = 0;
        } else {
            $stream->started = 1;
        }
        $stream->save();

        Session::flash('success', 'Элемент успешно обновлен!');

        return redirect()->route('stream.index');

    }
}
