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
        $courses = Course::all()->where('visible', 1);
        $streams = Stream::all()->where('started', 0);
        $user = Auth::user();
        return view('front.index', compact('courses', 'streams', 'user'));
    }

    public function course($id){
        $course = Course::findOrFail($id);
        return view('front.single_course', compact('course'));
    }

    public function course_lessons($id){
        $course = Course::findOrFail($id);
        $lessons = $course->lessons;
        return view('front.course_lessons', compact('course','lessons'));
    }

    public function faqs(){
        $faqs = FAQ::all();
        return view('front.faqs', compact('faqs'));
    }
}
