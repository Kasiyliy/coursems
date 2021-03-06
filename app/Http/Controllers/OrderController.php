<?php

namespace App\Http\Controllers;

use App\Course;
use App\Stream;
use App\Order;
use App\Subscription;
use App\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Session;

class OrderController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::where('course_id', '!=', 2)->get();
        return view('admin.orders.index', compact("subscriptions"));
    }

    public function create()
    {
        $streams = DB::table('streams')->get();
        $users = User::all();
        return view('admin.orders.create', compact("streams", "users"));
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

    public function edit($id)
    {
        $order = Order::find($id);
        $streams = Stream::all();
        $users = User::all();
        if (!$order) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }
        return view('admin.orders.edit', compact('order', 'streams', 'users'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        if (!$order) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        $validator = Validator::make($request->all(), Order::$validatesAll);

        if ($validator->fails()) {
            Session::flash('error', 'Ошибка!');
            return redirect()->back()->withErrors($validator);
        } else {
            $order->fill($request->all());
            $order->save();
            Session::flash('success', 'Элемент успешно обновлен!');
            return redirect()->back();
        }
    }

    public function toggleStatus($id)
    {
        $order = Subscription::find($id);
        if (!$order) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        $order->status = !$order->status;
        $order->save();
        Session::flash('success', 'Элемент успешно обновлен!');
        return redirect()->back();

    }

    public function delete($id){
        $order = Order::findOrFail($id);
        $order->forcedelete();
        Session::flash('success', 'Элемент успешно удален!');
        return redirect()->back();

    }
}
