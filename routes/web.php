<?php

use App\Mail\TestEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PersonneController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [App\Http\Controllers\PersonneController::class, 'index'])->name('home');

Route::get('form/new', [App\Http\Controllers\PersonneController::class, 'index'])->name('form/new');

Route::post('form/store', [App\Http\Controllers\PersonneController::class, 'store'])->name('form/store');

// Route::post('form/new', [App\Http\Controllers\PersonneController::class, 'sendEmail'])->name('form/store');


Route::get('/email', [App\Http\Controllers\MailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\MailController::class, 'sendEmail'])->name('send.email');
