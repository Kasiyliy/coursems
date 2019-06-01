<?php

namespace App\Http\Controllers;

use Session;
use Validator;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact("courses"));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Course::$validatesAll);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $course = new Course();
            $course->fill($request->all());
            $image = $request->image_path;
            $image_path = time() . $image->getClientOriginalName();
            $imageFullPath = $image->move('assets/files/courses/', $image_path);
            $course->image_path = $imageFullPath;
            $course->save();
            Session::flash('success', 'Элемент успешно добавлен!');
            return redirect()->back();
        }
    }

    public function details($id)
    {
        $course = Course::find($id);
        if ($course) {
            return view('admin.courses.details', compact("course"));
        } else {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $course = Course::find($id);
        if ($course) {
            $course->delete();
            Session::flash('error', ' Элемент удален!');
        } else {
            Session::flash('error', ' Элемент не существует!');
        }
        return redirect()->back();
    }


    public function edit($id)
    {
        $course = Course::find($id);
        if (!$course) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        return view('admin.courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        if (!$course) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        $validator = Validator::make($request->all(), Course::$validatesWithoutImage);

        if ($validator->fails()) {
            Session::flash('error', 'Ошибка!');
            return redirect()->back()->withErrors($validator);
        } else {
            $course->fill($request->all());
            $course->save();
            Session::flash('success', 'Элемент успешно обновлен!');
            return redirect()->back();
        }
    }

    public function toggleVisibility($id)
    {
        $course = Course::find($id);
        if (!$course) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        $course->visible = !$course->visible;
        $course->save();
        Session::flash('success', 'Элемент успешно обновлен!');
        return redirect()->back();

    }

    public function updateImage(Request $request, $id)
    {
        $course = Course::find($id);
        if (!$course) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        $validator = Validator::make($request->all(), Course::$validatesOnlyImage);

        if ($validator->fails()) {
            Session::flash('error', 'Ошибка!');
            return redirect()->back()->withErrors($validator);
        } else {

            if (file_exists($course->image_path)) {
                unlink($course->image_path);
            }
            $image = $request->image_path;
            $image_path = time() . $image->getClientOriginalName();
            $imageFullPath = $image->move('assets/files/courses/', $image_path);
            $course->image_path = $imageFullPath;

            $course->save();
            Session::flash('success', 'Элемент успешно обновлен!');
            return redirect()->back();
        }
    }
}
