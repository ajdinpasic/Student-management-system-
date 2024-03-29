<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    public function post(Request $request)
    {

        $userAttempt = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        if (Auth::attempt($userAttempt)) {
            $request->session()->regenerate();
            Toastr::success('Welcome back');
            return redirect()->route('home');
        } else {
            Toastr::error('Creditentials do not match');
            return back()->withErrors([
                "email" => "Creditentials do not match",
            ]);
        }
    }
}
