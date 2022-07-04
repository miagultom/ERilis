<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.home');
});

// Route::get('/', function () {
//     return view('admin.dashboard');
// });

Route::get('/user/login', [LoginController::class, 'index']);
Route::post('/user/login', [LoginController::class, 'login']);

Route::get('/user/register', [RegisterController::class, 'index']);
Route::post('/user/register', [RegisterController::class, 'register']);

Route::get('/user/dashboard', [DashboardController::class, 'index']);