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
        @if(Auth::user()->author == true)
              echo 'this author role';
            @endif
                @if(Auth::user()->admin == true)
              echo 'this admin role';
            @endif
                @if(Auth::user()->user == true)
              echo 'this user role';
            @endif
        return view('home');
    }
}
