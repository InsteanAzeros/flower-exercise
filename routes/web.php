<?php

use App\Http\Controllers\FlowerController;
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

// Default
Route::get('/', function () {
    return view('welcome');
});

// Custom routes
Route::get('/flowers', [FlowerController::class, 'index']);
Route::get('/flowers/create', [FlowerController::class, 'create']);
Route::post('/flowers/create', [FlowerController::class, 'insert']);
Route::get('/flowers/{id}', [FlowerController::class, 'show']);
