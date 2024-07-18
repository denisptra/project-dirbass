<?php

use App\Http\Controllers\MaleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SendEmail;
use App\Models\Male;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('user/page/home/welcome');
})->name('welcome');

Route::get('/news-page', [NewsPageController::class, 'index']);

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth', 'verified')->name('verification.notice');

Route::get('send-email', [SendEmail::class, 'index']);

Route::get('/dashboard-admin', function () {
    return view('admin/page/dashboard');
})->middleware(['auth', 'role:admin,superadmin', 'verified'])->name('dashboard');

Route::middleware('auth', 'role:admin,superadmin', 'verified')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/user/male', \App\Http\Controllers\MaleController::class);
    Route::resource('/news', \App\Http\Controllers\NewsController::class);
    Route::resource('/creation', \App\Http\Controllers\CreationController::class);

    Route::put('news/update-status/{id}', [NewsController::class, 'updateStatus'])->name('news.updateStatus');
});

Route::middleware('auth', 'role:superadmin', 'verified')->group(function () {
    Route::resource('/user/account', \App\Http\Controllers\UserController::class);
});




require __DIR__ . '/auth.php';
