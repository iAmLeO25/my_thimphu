<?php

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

Route::get('/a', function () {
    return view('index-02');
});

Route::get('/b', function () {
    return view('index-2');
});

Route::get('/c', function () {
    return view('index-01');
});
Route::get('/d', function () {
    return view('blog-2-columns');
});

Route::get('/e', function () {
    return view('blog-single');
});

Route::get('/f', function () {
    return view('coming-soon');
});