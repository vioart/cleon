<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile.home');
});

Route::get('/login-cleon', function () {
    return view('auth-cleon.login');
})->name('login-cleon');

Route::get('/product', function () {
    return view('profile.product');
})->name('product');

Route::get('/about/profile', function () {
    return view('profile.profile');
})->name('profile');

Route::get('/about/tos', function () {
    return view('profile.tos');
})->name('tos');

Route::get('/contact', function () {
    return view('profile.contact');
})->name('contact');

Route::get('/faq', function () {
    return view('profile.faq');
})->name('faq');

Route::get('/doorprize', function () {
    return view('profile.doorprize');
})->name('doorprize');

Route::get('/check-paket', function () {
    return view('auth-cleon.check-paket');
})->name('check-paket');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
