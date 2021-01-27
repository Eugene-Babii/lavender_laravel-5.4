<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'RentController@index');

Route::get('/booking', 'RentController@booking');

Route::get('/rules', function () {
    return view('rules');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
