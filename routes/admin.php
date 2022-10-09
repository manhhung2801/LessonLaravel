<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Auth\LoginController;
use \App\Http\Controllers\Admin\HomeController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Start-Admin

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');
Route::middleware('auth:admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
});





