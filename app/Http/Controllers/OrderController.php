<?php

namespace App\Http\Controllers;

use App\Course;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Session;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact("orders"));
    }

    public function create()
    {
        $courses = Course::all();
        $users = User::all();
        return view('admin.orders.create', compact("courses", "users"));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Order::$validatesAll);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $order = new Order();
            $order->fill($request->all());
            $order->save();
            Session::flash('success', 'Элемент успешно добавлен!');
            return redirect()->back();
        }
    }

    public function toggleStatus($id)
    {
        $order = Order::find($id);
        if (!$order) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        $order->status = !$order->status;
        $order->save();
        Session::flash('success', 'Элемент успешно обновлен!');
        return redirect()->back();

    }
}
