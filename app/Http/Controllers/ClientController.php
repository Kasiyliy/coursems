<?php

namespace App\Http\Controllers;

use App\Course;
use App\Order;
use DateTime;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function courses()
    {
        $courses = DB::table('courses')
            ->select('courses.id as id', 'courses.name', 'courses.description')
            ->leftJoin('streams', 'courses.id', '=', 'streams.course_id')
            ->leftJoin('orders', 'streams.id', '=', 'orders.stream_id')
            ->leftJoin('users', 'orders.user_id', '=', 'users.id')
            ->where('users.id', Auth::id())
            ->where('started', true)
            ->where('visible', true)
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
