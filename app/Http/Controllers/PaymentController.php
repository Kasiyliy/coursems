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

//        $client = new Client();
//        $request = $client->post('https://money.yandex.ru/quickpay/confirm.xml')
//            ->addPostFiles(
//                array(
//                    'receiver' => '4100110291387351',
//                    'formcomment' => "Покупка курса {{$course->name}}",
//                    'short-dest' => "Покупка курса {{$course->name}}",
//                    'label' => "$user->id=$course->id",
//                    'quickpay-form' => 'shop',
//                    'targets' => "транзакция за курс $course->name",
//                    'sum' => $course->price,
//                    'need-fio' => 'false',
//                    'need-phone' => 'false',
//                    'need-address' => 'false',
//                    'payment-type' => 'AC',
//                )
//            );
//
//        $response = $request->send();

        return view('auth.payment', compact('course', 'user'));
    }

    public function finish(Request $request)
    {
        $transaction = new Transaction();
        $transaction->fill($request->all());

        list($user_id, $course_id) = explode('=', $request->label);

        $transaction->user_id = $user_id;
        $transaction->course_id = $course_id;

        Subscription::create([
            'user_id' => $user_id,
            'course_id' => $course_id,
            'status' => 1,
        ]);

        $transaction->save();
        Session::flash('success', 'Курс успешно оплачен!');

        return response('', 200);
    }
}