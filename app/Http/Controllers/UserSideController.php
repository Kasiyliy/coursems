<?php

namespace App\Http\Controllers;

use App\Course;
use App\FAQ;
use App\Homework;
use App\Lesson;
use App\Stream;
use App\Order;
use App\Subscription;
use Psy\Util\Str;
use Session;
use DB;

use Auth;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function index()
    {
        $courses = Course::where('visible', 1)->get();
        $header_courses = Course::where('visible', 1)->orderBy('id', 'desc')->take(4)->get();


        $user = Auth::user();

        $faqs = FAQ::orderBy('id', 'desc')->get();

        return view('front.index', compact('courses', 'faqs', 'user', 'header_courses'));
    }

    public function course($id)
    {
        $header_courses = Course::where('visible', 1)->orderBy('id', 'desc')->take(4)->get();
        $course = Course::findOrFail($id);
        $lessons = $course->lessons;
        return view('front.courseDetails', compact('course', 'lessons', 'header_courses'));
    }

    public function myCourses()
    {
        $header_courses = Course::where('visible', 1)->orderBy('id', 'desc')->get();
        $myStreams = array();
        $user = Auth::user();
        $myOrders = $user->subscriptions->where('status', 1);

        return view('front.myCourses', compact('myOrders', 'header_courses'));
    }

    public function courseLessons($id)
    {
        $header_courses = Course::where('visible', 1)->orderBy('id', 'desc')->get();
        $lesson = Lesson::find($id);
        $nextLesson = Lesson::find($id+1);
        $lessons = Lesson::where('course_id', $lesson->course_id)->get();
        if (!$lesson->course) {
            return abort(404);
        } else {
            $user = Auth::user();
            $course = $lesson->course;
            $checkedHomeworks = Homework::where('user_id', $user->id)
                ->where('status', 1)->get();

            return view('front.courseLessons', compact('lesson', 'lessons', 'header_courses', 'nextLesson'));
        }
    }

    public function faqs()
    {
        $header_courses = Course::where('visible', 1)->orderBy('id', 'desc')->take(4)->get();
        $faqs = FAQ::all();
        return view('front.faqs', compact('faqs', 'header_courses'));
    }

    public function aboutUs()
    {
        $header_courses = Course::where('visible', 1)->orderBy('id', 'desc')->take(4)->get();
        return view('front.aboutUs', compact('header_courses'));
    }

    public function contact()
    {
        $header_courses = Course::where('visible', 1)->orderBy('id', 'desc')->take(4)->get();
        return view('front.contact', compact('header_courses'));
    }

    public function makeOrder($course_id)
    {
        $user = Auth::user();
        if (!$user) {
            Session::flash('warning', 'Войдите в систему, либо зарегистрируйтесь!');
            return redirect()->route('login');
        } else {
            if ($user->subscriptions()->where('status', 1)->where('course_id', $course_id)->first()) {
                Session::flash('warning', 'Вы уже записаны!');
                return redirect()->back();
            }

            $course = Course::find($course_id);

            if($course->id == 2 && !$user->survey()->where('status', 1)->first()) {
                Session::flash('warning', 'Пройдите опрос для данного курса');
                return redirect()->route('survey');
            }

            return redirect()->route('pay.course', ['id'=>$course_id]);
        }

    }

    public function homework($id)
    {
        $header_courses = Course::where('visible', 1)->orderBy('id', 'desc')->take(4)->get();
        $lesson = Lesson::find($id);
        return view('front.homework', compact('header_courses', 'lesson'));
    }

    public function homeworkAdd(Request $request, $id)
    {
        $image = $request->image_path;
        $image_path = time() . $image->getClientOriginalName();
        $imageFullPath = $image->move('assets/files/homeworks/', $image_path);
        $homeWork = Homework::create([
            'lesson_id' => $id,
            'user_id' => Auth::user()->id,
            'image_path' => $imageFullPath,
            'comment' => $request->comment,
            'status' => 0,
        ]);

        return redirect()->route('single.course.lessons', ['id' => $id]);
    }

}
