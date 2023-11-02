<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        if($request->method() == 'GET' ){
            return view('auth.login');
        }
        else if($request->method() == 'POST' ){
            $data = $request->only('email', 'password');
            if (Auth::attempt($data)) {
                //login success
                return redirect(route('home'))->width('login', 'success');
            }
            else{
                //login fail
                return redirect()->back()->width('login', 'fail');
            }
        }
    }

    public function register(Request $request){

    }
}
