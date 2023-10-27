<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\Yonet;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin-login', function () {
    return view('admin-login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/iletisim', function () {
    return view('iletisim');
});

Route::get('/filmler', function () {
    return view('filmler');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('gfg', function () {
    return view('gfg');
});

Route::get('/register', function(){
    return views('register');
});

//Route::resource('post', 'Controller');
