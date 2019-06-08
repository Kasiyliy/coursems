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
        return view('admin.streams.index' , compact("streams"));
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
        return view('admin.stream.edit', compact('stream', 'courses', 'users'));
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
}
