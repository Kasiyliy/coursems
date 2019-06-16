<?php

namespace App\Http\Controllers;

use App\Homework;
use Illuminate\Http\Request;

class HomeWorksController extends Controller
{
    public function index(){
        $homeworks = Homework::all();
        return view('admin.homeworks.index', compact('homeworks'));
    }

    public function create(){

    }

    public function status($id){
        $homework = Homework::findOrFail($id);
        $homework->status = 1;
        $homework->save();
        return redirect()->route('homeworks.index');
    }
}
