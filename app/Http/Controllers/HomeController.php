<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $joinDate = '';
        if (Auth::check()) {
            // The user is logged in...
        //    $joinDate= date("Y/m/d",Auth::user()->created_at);
        $joinDate = date("F d, Y h:m:s",strtotime(Auth::user()->created_at));
        }
        return view('home')->with('joinDate',$joinDate);
    }
}
