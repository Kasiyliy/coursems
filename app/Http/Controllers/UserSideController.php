<?php

namespace App\Http\Controllers;

use App\Course;
use App\FAQ;
use App\Stream;
use Auth;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function index(){
        $courses = Course::where('visible', 1)->get();
        $header_courses = Course::where('visible', 1)->orderBy('id','desc')->take(4)->get();
        $streams = Stream::all()->where('started', 0);
        $user = Auth::user();
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
}
