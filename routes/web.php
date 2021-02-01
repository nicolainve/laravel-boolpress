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

/* HOMEPAGE */

Route::get('/', 'HomeController@index')->name('home');


/* ROUTES AUTHENTICATION */

Auth::routes();

/* ROUTES PAGES LOGGED USERS */

Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function() {
        // Home Admin
        Route::get('/', 'HomeController@index')->name('home');

        // Post Routes
        Route::resource('posts', 'PostController');
    });