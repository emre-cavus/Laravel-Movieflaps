<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        return view('/');
    }
    function login() {
        return view('login');
    }
    function register() {
        return view('register');
    }
    function gfg() {
        return view('gfg');
    }
    function profil() {
        return view('profil');
    }
    function filmler() {
        return view('filmler');
    }
    function iletisim() {
        return view('iletisim');
    }
    function dashboard() {
        return view('dashboard');
    }
    function admin() {
        return view('admin-login');
    }

}
