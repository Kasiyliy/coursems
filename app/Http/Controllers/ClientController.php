<?php

namespace App\Http\Controllers;

use App\Course;
use App\Order;
use DateTime;
use Session;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function courses()
    {
        $orders = Order::all();
        foreach ($orders as $order) {
            $date1 = new DateTime($order->deadline);
            $date2 = new DateTime(date('Y-m-d H:i:s'));


            if ($date2 > $date1) {
                $order->status = false;
                $order->save();
            }
        }

        $courses = DB::table('courses')
            ->select('courses.id as id', 'name', 'description')
            ->leftJoin('orders', 'courses.id', '=', 'orders.course_id')
            ->where('status', true)
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
