<?php

namespace App\Http\Controllers;

use Validator;
use Session;
use App\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all();
        return view('admin.faq.index', compact("faqs"));
    }

    public function create(Request $request)
    {
        return view('admin.faq.create');
    }

    public function store(Request $request){
        $faqs = FAQ::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->back();
    }

    public function delete($id){
        FAQ::where('id',$id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $faq = FAQ::find($id);
        if (!$faq) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }
        return view('admin.faq.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $faq = FAQ::find($id);
        if (!$faq) {
            Session::flash('error', ' Элемент не существует!');
            return redirect()->back();
        }

        $validator = Validator::make($request->all(), FAQ::$validatesAll);

        if ($validator->fails()) {
            Session::flash('error', 'Ошибка!');
            return redirect()->back()->withErrors($validator);
        } else {
            $faq->fill($request->all());
            $faq->save();
            Session::flash('success', 'Элемент успешно обновлен!');
            return redirect()->route('faq.index');
        }
    }
}
