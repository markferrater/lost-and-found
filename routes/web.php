<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;


    Route::get('/', function () {
        return redirect()->route('show_login');
    });

// Route::get('/register_my_guy_here', [authController::class, 'show_register'])->name('show_register');
Route::get('/login', [authController::class, 'show_login'])->name('show_login');
Route::post('/login', [authController::class, 'login'])->name('login');

Route::post('/register', [authController::class, 'register'])->name('register');
Route::get('/logout', [authController::class, 'logout'])->name('logout');

Route::get('/dashboard', [homeController::class, 'public_Overview'])->name('public_Overview');

// ======================================================================================
// Route::get('/home', [homeController::class, 'show_dashboard'])->name('home')->middleware('auth'); // checks if user is authenticated before allowing access to the home page ->middleware('auth')
// Route::get('/home/report_item', [homeController::class, 'report_item'])->name('home.report');
// Route::get('/home/claim_item',[homeController::class, 'claim_item'])->name('home.claim');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [homeController::class, 'show_dashboard'])->name('home');
    Route::get('/home/report_item', [homeController::class, 'report_item'])->name('home.report');
    Route::get('/home/claim_item', [homeController::class, 'claim_item'])->name('home.claim');
});

Route::post('/home/report_item', [homeController::class, 'store_report'])->name('submit.report');
Route::post('/home/claim_item', [homeController::class, 'claim_report'])->name('submit.claim');

// ======================================================================================


//===========================================================================================
// this is a test purposes


Route::get('/home/test',[homeController::class, 'test'])->name('test');






// 
