<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BeritaController;
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

// Route::get('/', function () {
//     return view('layouts.home');
// });

// Route::get('/', function () {
//     return view('admin.dashboard');
// });
Route::get('/',[UserController::class, 'index']);
Route::get('/user/detailUser/{id}', [UserController::class, 'detailBerita']);

Route::get('/user/login', [LoginController::class, 'index']);
Route::post('/user/login', [LoginController::class, 'login']);

Route::get('/user/register', [RegisterController::class, 'index']);
Route::post('/user/register', [RegisterController::class, 'register']);

Route::get('/user/dashboard', [DashboardController::class, 'index']);

Route::get('/user/berita', [BeritaController::class, 'index']);

Route::get('/user/create', [BeritaController::class, 'create']);
Route::post('/user/create/addBerita', [BeritaController::class, 'store']);

Route::get('/user/edit/{id}', [BeritaController::class, 'edit']);
Route::post('/user/update/{id}', [BeritaController::class, 'update']);

Route::get('user/delete/{id}', [BeritaController::class, 'delete']);
Route::get('/user/detail/{id}', [BeritaController::class, 'detailBerita']);