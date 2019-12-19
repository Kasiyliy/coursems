<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('home');
    }

    public function survey(Request $request)
    {
        return view('auth.survey');
    }

    public function front(Request $request)
    {
        return view('front.index');
    }
}
