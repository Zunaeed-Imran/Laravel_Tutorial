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
    return view('welcome');
});

Route::get('/test', function () {
    echo 'Hello imran';
});

Route::any('/test2', function () {
    echo 'This is Post method testing';
});

Route::get('/demo/{name?}', function ($name = null) {
    return view('demo') . $name;
});
