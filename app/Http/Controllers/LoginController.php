<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Hash;

class LoginController extends Controller
{
    
    public function index(){
        return view ('login.index');
    }
    public function check(Request $request){

        $credentials = $request->validate([
            'email' =>  ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return view ('index');

        }
        return view ('index');
    }
}
