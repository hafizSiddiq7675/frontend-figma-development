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
Route::get('/figma1', function () {
    return view('figma');
});
Route::get('/figma2', function () {
    return view('cv-figma');
});
Route::get('/crypto', function () {
    return view('crypto-figma');
});
Route::get('/crypto1', function () {
    return view('crypto');
});
Route::get('test', function () {
    return view('superball');
});

