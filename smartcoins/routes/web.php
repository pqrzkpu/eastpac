<?php

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

/* Landing Page */
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/faq', function () {
    return view('welcome');
})->name('faq');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact-us');

Route::get('/about', function () {
    return view('about');
})->name('about');


Auth::routes();

// after
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

