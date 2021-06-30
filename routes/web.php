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
})->name("index");

Route::get('/app-contact', function () {
    return view('app-contact');
})->name("app-contact");
Route::get('/table-basic', function () {
    return view('table-basic');
})->name("table-basic");
Route::get('/report-user', function () {
    return view('report-user');
})->name("report-user");