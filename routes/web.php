<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/promotions', [ MainController::class, 'index' ])->name('index');

Route::get('/promotions/add', [ MainController::class, 'add_promotion' ])->name('add-promotion');

Route::post('/promotions/add', [ MainController:: class, 'insert_promotion' ])->name('insert-promotion');
