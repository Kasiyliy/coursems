<?php

namespace App\Http\Controllers;

use App\Course;
use App\Lesson;
use Validator;
use Session;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function create($id)
    {
        $course = Course::find($id);
        if ($course) {
            return view('admin.lessons.create', compact("course"));
        } else {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), Lesson::$validatesAll);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $lesson = Lesson::create($request->all());
            Session::flash('success', 'Элемент успешно добавлен!');
            return redirect()->back();
        }
    }
}
