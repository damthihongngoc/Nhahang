<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RestaurantController;



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

Route::get('/', 'HomeController@index') -> name('home.index');

//Route::get('/', 'HomeController@about') -> name('home.about');

//Route::get('/', 'HomeController@contact') -> name('home.contact');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@dashboard') -> name('admin.dashboard');
  
    Route::resources([
    
        'account' => 'AccountController',
        'restaurants' => 'RestaurantController'
    ]);
});

