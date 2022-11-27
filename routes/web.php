<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\publisherController;
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

Route::get('/', [indexController::class, 'index']);
Route::get('books/{id}', [bookController::class, 'book_cat']);
Route::get('/category/{id}', [categoryController::class, 'category']);
Route::get('/publisher', [publisherController::class, 'publisher']);
Route::get('/publisher/detail/{id}', [publisherController::class, 'detail']);
Route::get('/contact', [contactController::class, 'contact']);
