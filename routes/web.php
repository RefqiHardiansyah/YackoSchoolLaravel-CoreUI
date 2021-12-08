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
    return view('index');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/augmentedrealty', function () {
    return view('augmentedrealty');
});
Route::get('/tour&travel', function () {
    return view('tour&travel');
});
Route::get('/informasi', function () {
    return view('informasi');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/music', function () {
    return view('music');
});
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});

