<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WebController;
use App\Http\Controllers\Backend\AdminWebController;

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

Route::group(['namespace'=>'frontend'], function(){
    Route::get('/',[WebController::class, 'index'])->name('index');
    Route::get('/visit',[WebController::class, 'visit'])->name('visit');
    Route::get('/exhibitions',[WebController::class, 'exhibitions'])->name('exhibitions');
    Route::get('/exhibitions-detials',[WebController::class, 'exhibitionsDetails'])->name('exhibitions.details');
    Route::get('/learn',[WebController::class, 'learn'])->name('learn');
    Route::get('/shop',[WebController::class, 'shop'])->name('shop');
    Route::get('/shop-details',[WebController::class, 'shopDetails'])->name('shop.details');
    //  
    Route::get('/become-a-member', [WebController::class, 'becomeAMember'])->name('become.a.member');
    Route::get('/donate', [WebController::class, 'donate'])->name('donate');
    Route::get('/student', [WebController::class, 'student'])->name('student');
    Route::get('/individual', [WebController::class, 'individual'])->name('individual');
    Route::get('/join-form', [WebController::class, 'joinForm'])->name('join.form');
    Route::get('/profile', [WebController::class, 'profile'])->name('profile');
});

 Route::group(['namespace'=>'backend'], function(){
     Route::get('/admin',[AdminWebController::class, 'index']);
 });
