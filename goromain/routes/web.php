<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homescreen');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/registeremail', function () {
    return view('register-request');
});
Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/resetpw_sendMail', [MailController::class, 'resetpw_sendMail'])->name('resetpw_sendMail');
Route::post('/register_sendMail', [MailController::class, 'register_sendMail'])->name('register_sendMail');

Route::get('/confirmnumber',[MailController::class, 'confirmnumber'])->name('confirmnumber');
Route::post('/request',[MailController::class,'verifyToken'])->name('request');

Route::get('/range', function () {
    return view('demo-range');
});
Route::get('/pixi', function () {
    return view('pixi');
});
