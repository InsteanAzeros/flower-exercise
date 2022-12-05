<?php

use App\Http\Controllers\FlowerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureIsAdmin;
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

// Default
Route::get('/', function () {
    return view('welcome');
});

// Custom routes
Route::get('/flowers', [FlowerController::class, 'index']);

Route::get('/flowers/create', [FlowerController::class, 'create'])->middleware('admin');

Route::post('/flowers/create', [FlowerController::class, 'insert'])->middleware('admin');
Route::get('/flowers/{id}', [FlowerController::class, 'show'])->name('flower.details');
Route::get('/flowers/update/{id}', [FlowerController::class, 'edit'])->middleware('admin');
Route::put('/flowers/update/{id}', [FlowerController::class, 'update'])->middleware('admin');
Route::delete('/flowers/delete/{id}', [FlowerController::class, 'destroy'])->middleware('admin');

Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login_form']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/test', function () {
    if (session('email'))
        return 'You are loggued in';
    else
        return 'you are NOT loggued in';
});
