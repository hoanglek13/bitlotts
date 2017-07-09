<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(Request $request){
        return view('account.dashboard');
    }


    public function buyTicket(Request $request){
        return view('account.buy');
    }

}
