<?php

namespace App\Http\Controllers;

use App\Course;
use App\FAQ;
use App\Homework;
use App\Lesson;
use App\Stream;
use App\Order;
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
        $streams = Stream::all()->where('started_at', '>=', date('Y-m-d'));

        $registered = DB::table('streams')
            ->select( DB::raw('count(streams.id) as count'), 'streams.id as id')
            ->leftJoin('orders', 'streams.id', '=', 'orders.stream_id')
            ->where('started', 0)
            ->groupBy('id')
            ->get();


        $user = Auth::user();

        if ($user) {
            $user_stream_ids = array();
            $orders = $user->orders;
            foreach ($orders as $order) {
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

            foreach ($streams as $stream) {
                foreach ($orders as $order){
                    if($stream->id == $order->stream_id) {
                        $stream->paid = $order->status;
                    }
                }
            }
        }

        $faqs = FAQ::orderBy('id', 'desc')->take(4)->get();

        return view('front.index', compact('courses', 'faqs', 'streams', 'user', 'header_courses', 'registered'));
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
        $nextLesson = null;
        if (!$lesson->course) {
            return abort(404);
        } else {
            $user = Auth::user();
            $course = $lesson->course;
            $checkedHomeworks = Homework::where('user_id', $user->id)
                ->where('status', 1)->get();
            if($checkedHomeworks->count() == 0){
                $visibleLessons[] = $lesson->course->lessons->where('next_lesson_id',1)->first();
            }
            else{
                foreach ($checkedHomeworks as $checkedHomework){
                    $visibleLessons[] = $checkedHomework->lesson;
                }
            }
                $lastHomework = Homework::where('lesson_id', $lesson->id)
                    ->where('user_id', $user->id)
                    ->orderBy('id', 'desc')
                    ->first();
                if($lastHomework) {
                    $lessonOrder = Lesson::findOrFail($lastHomework->lesson_id)->next_lesson_id;
                    $nextLesson = Lesson::where('course_id', $course->id)->where('next_lesson_id', $lessonOrder + 1)->first();
                }
                else{
                    $nextLesson = Lesson::where('course_id', $course->id)->where('next_lesson_id', 1)->first();

                }
            return view('front.courseLessons', compact('lesson', 'header_courses', 'nextLesson', 'visibleLessons','lastHomework'));
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

    public function makeOrder($stream_id)
    {
        $user = Auth::user();
        if (!$user) {
            Session::flash('warning', 'Войдите в систему, либо зарегистрируйтесь!');
            return redirect()->back();
        } else {
            if ($user->orders()->where('status', 0)->where('stream_id', $stream_id)->first()) {
                Session::flash('warning', 'Вы уже записаны!');
                return redirect()->back();
            }

            Order::create([
                'user_id' => $user->id,
                'stream_id' => $stream_id,
                'status' => 0,
            ]);
            Session::flash('success', 'Ваша заявка принята! Мы вам обязательно позвоним!');
            return redirect()->route('front');
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
