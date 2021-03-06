<?php

use App\Http\Controllers\Homecontroller;
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

Route::get('/', [Homecontroller::class, 'index'])->name('home');

Route::get('/cars/create', [Homecontroller::class, 'create'])->name('create');

Route::get('/cars', [Homecontroller::class, 'store'])->name('store');
