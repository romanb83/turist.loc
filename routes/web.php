<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Advert\AdvertController;
use App\Http\Controllers\Cabinet\LoginController;
use App\Http\Controllers\Cabinet\CabinetController;
use App\Http\Controllers\Cabinet\RegisterController;
use App\Http\Controllers\Cabinet\ResetPasswordController;
use App\Http\Controllers\Cabinet\ForgotPasswordController;

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

Route::get('/', [HomeController::class, 'show'])->name('welcome');
Route::post('/search', [HomeController::class, 'search'])->name('search');

// Cabinet auth //
Route::get('/register', [RegisterController::class, 'show'])->name('show.register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/register/{token}', [RegisterController::class, 'verify'])->name('register.verify');
Route::get('/login', [LoginController::class, 'show'])->name('show.login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware(['throttle:login']); //  !!!!!!!
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

////////////////////////////////////////////////////////////////////////////////////

//  Cabinet //

Route::get('/dashboard', [CabinetController::class, 'showDashboard'])->name('show.dashboard')->middleware('auth');
Route::get('/dashboard/account', [CabinetController::class, 'showDashboardAccount'])->name('show.dashboard.account');
Route::get('/dashboard/my-booking', [CabinetController::class, 'showMyBooking'])->name('show.my.booking');


Route::post('/regions', [AjaxController::class, 'getRegions'])->name('ajax.regions');
Route::post('/cities', [AjaxController::class, 'getCities'])->name('ajax.cities');


//  Advert //

Route::get('/cards', [AdvertController::class, 'show'])->name('show.cards');
Route::get('/advert/add', [AdvertController::class, 'showAddAdvertForm'])->name('show.add.advert.form');
Route::post('/add', [AdvertController::class, 'add'])->name('add.advert');
Route::get('/advert', [AdvertController::class, 'advert'])->name('show.advert');

