<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerHome;
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

Route::get('/', [controllerHome::class, 'login'])
    ->name('login');
Route::get('/register', [RegisteredUserController::class, 'view'])
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);
