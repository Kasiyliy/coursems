<?php

namespace App\Http\Controllers;

use App\Course;
use App\FAQ;
use App\Homework;
use App\Lesson;
use App\Stream;
use App\Order;
use Session;

use Auth;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function index()
    {
        $courses = Course::where('visible', 1)->get();
        $header_courses = Course::where('visible', 1)->orderBy('id', 'desc')->take(4)->get();
        $streams = Stream::all()->where('started', 0);
        $user = Auth::user();

        if ($user) {
            $user_stream_ids = array();
            foreach ($user->orders()->where('status', 0)->get() as $order) {
                if ($order->stream) {
                    $user_stream_ids[] = $order->stream_id;
                }
            }


            foreach ($streams as $stream) {
                if ($stream) {
                    if (in_array($stream->id, $user_stream_ids)) {
                        $stream->alreadyHasId = true;
                    }
                }
            }
        }

        $faqs = FAQ::orderBy('id', 'desc')->take(4)->get();

        return view('front.index', compact('courses', 'faqs', 'streams', 'user', 'header_courses'));
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
        $header_courses = Course::where('visible', 1)->orderBy('id', 'desc')->take(4)->get();
        $myStreams = array();
        $user = Auth::user();
        $myOrders = $user->orders->where('status', 0);

        foreach ($myOrders as $myOrder) {
            if (strtotime($myOrder->stream->deadline) > time()) {
                $myStreams[] = $myOrder->stream;
            }
        }
        return view('front.myCourses', compact('myStreams', 'header_courses'));
    }

    public function courseLessons($id)
    {
        $header_courses = Course::where('visible', 1)->orderBy('id', 'desc')->take(4)->get();
        $lesson = Lesson::findOrFail($id);
        if (!$lesson->course) {
            return abort(404);
        } else {
            $course = $lesson->course;
            $user = Auth::user();
            $lastHomework = Homework::where('lesson_id', $lesson->id)
                ->where('user_id', $user->id)
                ->where('status', 1)
                ->orderBy('id', 'desc')
                ->first();
            $lessons = $course->lessons;
            foreach ($lessons as $lesson) {
                if ($lesson->id == $lastHomework->lesson_id) {

                }
            }
        }
        return view('front.courseLessons', compact('lesson', 'header_courses'));
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

    public function makeOrder($stream_id)
    {
        $user = Auth::user();
        if (!$user) {
            Session::flash('warning', 'Войдите в систему, либо зарегистрируйтесь!');
            return redirect()->back();
        } else {
            if ($user->orders()->where('status', 0)->where('stream_id', $stream_id)->first()) {
                Session::flash('warning', 'Вы уже записаны!');
            }
//            $order = new Order();
//            $order->user_id = ;
//            $order->stream_id = ;
//            $order->status = 0;
//            $order->save();

            Order::create([
                'user_id' => $user->id,
                'stream_id' => $stream_id,
                'status' => 0
            ]);
            Session::flash('success', 'Вы успешно записались в поток!');
            return redirect()->route('front');
        }

    }
}
