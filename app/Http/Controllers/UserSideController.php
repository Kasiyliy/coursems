<?php

namespace App\Http\Controllers;

use App\Course;
use App\FAQ;
use App\Stream;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function index(){
        $courses = Course::all()->where('visible', 1);
        $streams = Stream::all()->where('started', 0);
        return view('front.index', compact('courses', 'streams'));
    }

    public function faqs(){
        $faqs = FAQ::all();
        return view('front.faqs', compact('faqs'));
    }
}
