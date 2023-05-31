<?php

use App\Http\Controllers\EventController;
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
    return view('index');
});

Route::get('/index-01', function () {
    return view('index-01');
});

Route::get('/b', function () {
    return view('index-2');
});

Route::get('/eveRegi', function () {
    return view('eveRegi');
});
Route::get('/crudUser', function () {
    return view('crudUser');
});

Route::get('/calan', function () {
    return view('calan');
});

Route::get('/coming-soon', function () {
    return view('coming-soon');
});

Route::get('/event', function () {
    return view('event');
});

Route::resource('products', EventController::class);
