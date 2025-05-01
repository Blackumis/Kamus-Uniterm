<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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
    return view('Home');
});

Route::get('/search', function (Request $request) {
    $query = $request->input('query');
    return "You searched for: " . $query;
})->name('search');

Route::get('/AboutUs', function () {
    return view('AboutUs');
});

Route::get('/Glosarium', function () {
    return view('Glosarium');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register',function () {
    return view('register');
});

Route::get('/Istilah',function () {
    return view('Istilah');
});