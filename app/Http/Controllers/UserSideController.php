<?php

namespace App\Http\Controllers;

use App\Course;
use App\FAQ;
use App\Stream;
use App\Order;
use Session;

use Auth;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function index(){
        $courses = Course::where('visible', 1)->get();
        $header_courses = Course::where('visible', 1)->orderBy('id','desc')->take(4)->get();
        $streams = Stream::all()->where('started', 0);
        $user = Auth::user();

        if($user) {
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

        return view('front.index', compact('courses', 'streams', 'user', 'header_courses'));
    }

    public function course($id){
        $header_courses = Course::where('visible', 1)->orderBy('id','desc')->take(4)->get();
        $course = Course::findOrFail($id);
        return view('front.single_course', compact('course', 'header_courses'));
    }

    public function course_lessons($id){
        $header_courses = Course::where('visible', 1)->orderBy('id','desc')->take(4)->get();
        $course = Course::findOrFail($id);
        $lessons = $course->lessons;
        return view('front.course_lessons', compact('course','lessons', 'header_courses'));
    }

    public function faqs(){
        $header_courses = Course::where('visible', 1)->orderBy('id','desc')->take(4)->get();
        $faqs = FAQ::all();
        return view('front.faqs', compact('faqs', 'header_courses'));
    }

    public function makeOrder($stream_id){
        $user = Auth::user();
        if (!$user) {
            Session::flash('warning', 'Войдите в систему, либо зарегейтрируйтесь!');

        } else {
            if($user->orders()->where('status',0)->where('stream_id', $stream_id)->first()){
                Session::flash('warning', 'Вы уже записаны!');
            }
            $order = new Order();
            $order->user_id = $user->id;
            $order->stream_id = $stream_id;
            $order->status = 0;
            $order->save();
            Session::flash('success', 'Вы успешно записались в поток!');
            return redirect()->route('front');
        }

    }
}
