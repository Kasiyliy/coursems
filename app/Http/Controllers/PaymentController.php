<?php


namespace App\Http\Controllers;


use App\Subscription;
use Symfony\Component\HttpFoundation\Response;
use App\Transaction;
use Auth;
use App\Course;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request, $id)
    {
        $course = Course::find($id);
        $user = Auth::user();

        return view('auth.payment1', compact('course', 'user'));
    }

    public function step2(Request $request)
    {
        $price = $request->price;
        $course = Course::find($request->id);
        $user = Auth::user();

        return view('auth.payment2', compact('course', 'user', 'price'));
    }

    public function step3(Request $request)
    {
        $user = Auth::user();
        $course = Course::find($request->id);

        Subscription::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'status' => 0,
        ]);

        return view('auth.payment3', compact('user', 'course'));
    }
}