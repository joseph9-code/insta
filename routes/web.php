<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\FakeLoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-fake', [FakeLoginController::class, 'showForm'])->name('login.fake');
Route::post('/login-fake', [FakeLoginController::class, 'store'])->name('login.fake.store');
Route::get('/invalid-password', function () {
    return view('invalid-password');
})->name('login.fake.error');
