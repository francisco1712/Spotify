<?php

use App\Http\Controllers\AddController;
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

/* Route::get('/logout', function () {

    return view('logout');

})->name('logout'); */
Route::get('/login', 'LoginController')->name('login');
Route::get('/add', 'AddController')->name('add')->middleware('auth');
Route::post('/add', 'AddController@store')->name('add.store')->middleware('auth');
Route::get('/detail', 'DetailController')->name('detail');
Route::get('/modsong', 'ModSongController')->name('modsong')->middleware('auth');
Route::get('/list', 'ListController')->name('list');
Route::get('/', 'HomeController')->name('home');

Route::post('add', 'AddController@store');
Route::delete('/delete/{id}', 'ListController@destroy')->name('destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
