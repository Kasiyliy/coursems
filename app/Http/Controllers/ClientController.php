<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function courses()
    {
        $courses = DB::table('courses')
            ->leftJoin('orders', 'courses.id', '=', 'orders.course_id')
            ->where('status', true)
            ->get();
        return view('client.courses.index', compact("courses"));
    }

    public function details($id)
    {
        $course = Course::find($id);
        if ($course) {
            return view('client.courses.details', compact("course"));
        } else {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }
    }
}
