<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IstilahController;

Route::get('/', [IstilahController::class, 'index']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'showSignUp']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/istilah/{nama_istilah}', [IstilahController::class, 'showIstilah']);
Route::post('/search', [IstilahController::class, 'search']);
Route::get('/glossary', [IstilahController::class, 'glossary']);