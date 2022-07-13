<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\QueryController;
;
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
    return view('day1.home');
})->name('home');

Route::resource('/posts', PostController::class);
Route::resource('/flight', FlightController::class);
Route::get('query', [QueryController::class, 'index']);
