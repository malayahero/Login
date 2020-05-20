<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class AdminController extends Controller
{
    //
   public function __construct(){
		$this->middleware('checkRole:admin');
	}

	public function index(){
		return "this is admin kemon kababeb";
	}
}
