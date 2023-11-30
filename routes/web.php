<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\DB;
/*
DB::connection('mysql')->select('config/database.php');
*/
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
Route::get('/admin-login', [PageController::class, 'admin-login'])->name('admin-login');
Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/filmler', [PageController::class, 'filmler'])->name('filmler');
Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/gfg', [PageController::class, 'gfg'])->name('gfg');
Route::get('/dbconn', [PageController::class, 'dbconn'])->name('dbconn');


Route::get('/login', [LoginController::class, 'index']);
Route::post('/check', [LoginController::class, 'check'])->name('check');

Route::get('/register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store'])->name('register');
