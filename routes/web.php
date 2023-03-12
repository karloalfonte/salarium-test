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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', function() {
    if (Auth::check())
    {
        return redirect()->route('dashboard');
    }
    return view('auth.login');
});
//------ Dashboard ---------------------//
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
