<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/wali/index', function () {
    return view('Index', [
        "title" => "Index"
    ]);
});

Route::get('/wali/create', function () {
    return view('Create', [
        "title" => "Create"
    ]);
});