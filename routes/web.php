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

Route::get('/user', function() {
    return view('user');
});

Route::get('/setting', function() {
    return view('setting');
});

Route::get('/cms', function() {
    return view('cms');
});

Route::get('/registration', function() {
    return view('registration');
});
Route::get('/entete', function() {
    return view('entete');
});

/*Route::get('/body', function() {
    return view('body');
}); */
//Route::get('/' , 'homecontroller@index');