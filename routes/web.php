<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

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

// Route::get('/', 'RentController@index');

Route::get('/', function () {
    // dd(DB::table('rents')
    //     ->join('users', 'rents.user_id', '=', 'users.id')
    //     ->where('rents.user_id', '=', auth()->id())
    //     ->orderBy('date', 'asc')
    //     ->get());
    return view('main');
});

Route::get('/rules', function () {
    return view('rules');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/booking', function () {
    return view('booking');
})->middleware('auth');

Route::post('/addbooking', 'RentController@add_booking');

Route::get('/cabinet', 'RentController@cabinet');

Route::get('/send', 'MailController@send');

// Route::get('/cabinet', function () {
//     return view('cabinet');
// })->middleware('auth');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
