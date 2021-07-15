<?php

use App\Http\Controllers\Home_Controller;
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

Route::get('/', [Home_Controller::class , 'index'])->name('index');
Route::get('/show', [Home_Controller::class , 'show'])->name('show');
Route::get('/save/{price}',[Home_Controller::class, 'save'])->name('home.save');
