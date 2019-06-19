<?php

namespace App\Http\Controllers;

use App\Order;
use App\Stream;
use Validator;
use Session;
use App\Homework;
use App\Vehicle;
use Illuminate\Http\Request;

class HomeWorksController extends Controller
{
    public function index(){
        $homeworks = Homework::all();
        return view('admin.homeworks.index', compact('homeworks'));
    }

    public function homeworkByOrder($id){

        $order = Order::find($id);
        $stream = Stream::find($order->stream_id);
        $lessons = $stream->course->lessons;
        $lessonsIds = null;

        foreach($lessons as $lesson){
            $lessonsIds[] = $lesson->id;
        }

        $homeworks = Homework::where('user_id', $order->user_id)->whereIn('lesson_id',$lessonsIds)->get();




        return view('admin.homeworks.index', compact('homeworks'));
    }

    public function create(){

    }

    public function status($id){
        $homework = Homework::findOrFail($id);
        $homework->status = 1;
        $homework->save();
        return redirect()->route('homeworks.index');
    }

    public function edit($id)
    {
        $homework = Homework::find($id);
        if (!$homework) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }
        return view('admin.homeworks.edit', compact('homework'));
    }

    public function update(Request $request, $id)
    {
        $homework = Homework::find($id);
        if (!$homework) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        $validator = Validator::make($request->all(), Homework::$validatesAll);

        if ($validator->fails()) {
            Session::flash('error', 'Ошибка!');
            return redirect()->back()->withErrors($validator);
        } else {
            $homework->fill($request->all());
            $homework->save();
            Session::flash('success', 'Элемент успешно обновлен!');
            return redirect()->route('homeworks.index');
        }
    }
}



