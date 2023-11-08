<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PageController;

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

/*
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/register', [PageController::class, 'register'])->name('register');
*/
Route::get('/admin-login', [PageController::class, 'admin-login'])->name('admin-login');
Route::get('/index', [PageController::class, 'index'])->name('index');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/filmler', [PageController::class, 'filmler'])->name('filmler');
Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/gfg', [PageController::class, 'gfg'])->name('gfg');

Route::get('login', [PageController::class, 'login'])->name('login');
Route::post('login', [PageController::class, 'login'])->name('login');

Route::get('register', [PageController::class, 'register'])->name('register');
Route::post('register', [PageController::class, 'register'])->name('register');
