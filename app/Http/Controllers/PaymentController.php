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
}