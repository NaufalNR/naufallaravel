<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::controller(AdminController::class)->group(function () {
    Route::get('admin', 'index');
    Route::get('panel/biodatadaftar', 'biodatadaftar');
    Route::post('panel/biodatadaftarcari', 'biodatadaftarcari');
    Route::get('panel/biodatatambah', 'biodatatambah');
    Route::post('panel/biodatatambahsimpan', 'biodatatambahsimpan');
    Route::get('panel/biodataedit/{id}', 'biodataedit');
    Route::post('panel/biodataeditsimpan/{id}', 'biodataeditsimpan');
    Route::get('panel/biodatahapus/{id}', 'biodatahapus');
    Route::get('panel/logout', 'logout');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('loginakun', 'login');
    Route::post('logincek', 'logincek');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
