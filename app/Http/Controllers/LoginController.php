<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $fields = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        if(Auth::attempt($fields,$request->rememberMe)){
            return redirect()->route('admin.forms')->with('login-success','Welcome back');
        } else{
            return redirect()->back()->withErrors(['err'=>'Login failed']);
        }
    }
}
