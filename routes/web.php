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
    return view('auth.login');
});
Route::get('/mahasiswa-dashboard', function () {
    return view('mahasiswa.index');
});

Route::get('/mahasiswa-profile', function () {
    return view('mahasiswa.profile');
});
