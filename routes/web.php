<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\CustomAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('alert', [HomeController::class, 'alert'])->name('alert');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.index');



Route::middleware([CustomAuth::class])->group(function () {
    Route::get('/design', [HomeController::class, 'design'])->name('design.index');
    Route::post('/save-design', [HomeController::class, 'storeDesign'])->name('save-design');
    Route::get('/orders',[HomeController::class, 'orders'])->name('orders.index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});