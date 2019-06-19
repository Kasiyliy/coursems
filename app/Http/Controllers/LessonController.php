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
            $lesson = new Lesson();
            $lesson->fill($request->all());
            $lesson->video_path = 'https://www.youtube.com/embed/'.substr($lesson->video_path, 32);
            $lesson->save();

            Session::flash('success', 'Элемент успешно добавлен!');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $lesson = Lesson::find($id);
        if ($lesson) {
            $lesson->delete();
            Session::flash('error', ' Элемент удален!');
        } else {
            Session::flash('error', ' Элемент не существует!');
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        return view('admin.lessons.edit', compact('lesson'));
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        $validator = Validator::make($request->all(), Lesson::$validatesAll);

        if ($validator->fails()) {
            Session::flash('error', 'Ошибка!');
            return redirect()->back()->withErrors($validator);
        } else {

            if($lesson->previousLesson && $request->next_lesson_id && $lesson->previousLesson->id === $request->next_lesson_id){
                Session::flash('warning', 'К уроку нельзя добавлять следующим этот урок!');
                return redirect()->back();
            }
            $lesson->fill($request->all());
            $lesson->save();
            Session::flash('success', 'Элемент успешно обновлен!');
            return redirect()->back();
        }
    }
}
