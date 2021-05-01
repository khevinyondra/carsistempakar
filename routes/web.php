<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiagnosaController;

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
Route::get('/diagnosis', function () {
    return view('diagnosis');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/home_user', [UserController::class, 'index']);
Route::get('/tabeldiagnosa', [UserController::class, 'indexhasildiagnosa']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/loginPost', [UserController::class, 'loginPost']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/registerPost', [UserController::class, 'registerPost']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/diagnosisresult', [DiagnosaController::class, 'diagnosisresult']);
Route::post('/hapusdata', [DiagnosaController::class, 'hapus']);