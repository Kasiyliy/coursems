<?php


namespace App\Http\Controllers;

use App\Course;
use App\Subscription;
use App\User;
use Session;
use Auth;
use Validator;
use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function survey(Request $request)
    {
        return view('auth.survey');
    }

    public function index()
    {
        $subscriptions = Subscription::where('course_id', 2)->get();
        return view('admin.surveys.index', compact("subscriptions"));
    }

    public function check($id)
    {
        $user = User::find($id);
        return view('admin.surveys.survey', compact("user"));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Survey::$validatesAll);

        if ($validator->fails()) {
            die('asd');
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