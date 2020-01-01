<?php


namespace App\Http\Controllers;

use App\Subscription;
use App\Survey;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Session;
use Validator;

class SurveyController extends Controller
{
    public function survey(Request $request)
    {
        return view('auth.survey');
    }

    public function index()
    {
        $subscriptions = Subscription::all();
        return view('admin.surveys.index', compact("subscriptions"));
    }

    public function check($id)
    {
        $user = User::with('survey')->find($id);
        if (!$user->survey) {
            \request()->session()->flash('warning', 'Ошибка!');
            return redirect()->back();
        }
        return view('admin.surveys.survey', compact("user"));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Survey::$validatesAll);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $user = Auth::user();
            if (!$user) {
                Session::flash('warning', 'Войдите в систему, либо зарегистрируйтесь!');
                return redirect()->route('register');
            }

            if ($user->survey()->where('status', 1)->first()) {
                Session::flash('warning', 'Вы уже проходили опрос!');
                return redirect()->back();
            }

            $survey = new Survey();
            $survey->fill($request->all());

            $image_skin = $request->skin_photo;
            $skin_photo_path = time() . $image_skin->getClientOriginalName();
            $imageFullPath = $image_skin->move('assets/files/surveys/', $skin_photo_path);
            $survey->skin_photo = $imageFullPath;

            $image_cosmetics = $request->cosmetics_photo;
            $cosmetics_photo_path = time() . $image_cosmetics->getClientOriginalName();
            $imageFullPath = $image_cosmetics->move('assets/files/surveys/', $cosmetics_photo_path);
            $survey->cosmetics_photo = $imageFullPath;

            $survey->user_id = $user->id;
            $survey->save();
            Session::flash('success', 'Опрос успешно пройден!');
            return redirect()->route('pay.course', ['id' => '2']);
        }
    }

}