<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;


class ModController extends Controller
{
    //
      public function __construct(){
		$this->middleware('checkRole:moderator'); //<<kalo dekat column ad dua row database moderator dgn admin so kalo nk active admin letak 1 je
	}

	public function index(){
		return "this is moderator kemon kababeb";
	}
}
