<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BeritaController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSession;
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
Route::get('/admin/logout', [LoginController::class, 'prosesLogout']);

Route::get('/user/register', [RegisterController::class, 'index']);
Route::post('/user/register', [RegisterController::class, 'register']);

Route::get('/user/dashboard', [DashboardController::class, 'index']);

Route::get('/user/berita', [BeritaController::class, 'index']);
Route::get('/user/create', [BeritaController::class, 'tambahData']);
Route::post('/user/create/addBerita', [BeritaController::class, 'add'])->name('createdata.addBerita');;

// Route::get('/user/berita', [BeritaController::class, 'indexBerita'])->middleware(CheckSession::class);
// Route::get('/admin/create', [AdminController::class, 'createDataWisata'])->middleware(CheckSession::class);
// Route::post('/admin/crete/addWisata', [AdminController::class, 'addWisata'])->name('createdata.addWisata')->middleware(CheckSession::class);
// Route::get('/Wisata/Detail/{id}', [AdminController::class, 'detailWisata'])->middleware(CheckSession::class);
// Route::get('/Wisata/Edit/{id}', [AdminController::class, 'editWisata'])->middleware(CheckSession::class);
// Route::post('Wisata/Update/{id}', [AdminController::class, 'updateWisata'])->name('updatedataWisata.addWisata')->middleware(CheckSession::class);
// Route::get('/Wisata/Delete/{id}', [AdminController::class, 'deleteWisata'])->name('deletedata.addWisata')->middleware(CheckSession::class);