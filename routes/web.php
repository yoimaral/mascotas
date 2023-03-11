<?php

use App\Http\Controllers\AgendaUserPetsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PetsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/agen', AgendaUserPetsController::class);

Route::resource('/users', UserController::class);

Route::resource('/pet', PetsController::class);