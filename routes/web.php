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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/form', function () {
    return view('form');
});
Route::post('/form', function () {
    return view('form');
});

Route::get('/form/admin', 'FormController@allData')->name('form-admin');
Route::post('/form/submit', 'FormController@submit')->name('form-nam');
Route::get('/form/submit', 'FormController@submit')->name('form-nam');