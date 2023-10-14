<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\CompaniesController;

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

Route::get('/home', function () {
    return view('dashboard');
})->name('home');

Route::get('/', [AuthManager::class, 'login'])->name('login');
Route::post('/', [AuthManager::class, 'loginPost'])->name('login.post');
Route::post('/logout', [AuthManager::class, 'destroy'])->name('logout');

Route::resource('/companies', \App\Http\Controllers\CompaniesController::class);
