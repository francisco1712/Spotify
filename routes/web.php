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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {

    return view('home');
    
})->name('home');

Route::get('/login', function () {

    return view('login');

})->name('login');

/* Route::get('/logout', function () {

    return view('logout');

})->name('logout'); */

Route::get('/list', function () {

    return view('list');

})->name('list');

Route::get('/add', function () {

    return view('add');

})->name('add');

Route::get('/detail', function () {

    return view('detail');

})->name('detail');

Route::get('/modsong', function () {

    return view('modsong');

})->name('modsong');
