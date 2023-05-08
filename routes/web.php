<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PenggunaController;

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


    Route::get('login', 'AuthController@loginView')->name('login-view');
    Route::post('login', 'AuthController@login')->name('login');
    Route::get('register', 'AuthController@registerView')->name('register-view');
    Route::post('register', 'AuthController@register')->name('register');

    Route::get('/page/side-menu/users-layout-1',[PenggunaController::class,'index']);
    Route::get('/', 'PageController@loadPage')->name('dashboard');
    Route::get('logout', 'AuthController@logout')->name('logout');
    Route::get('page/{layout}/{pageName}', 'PageController@loadPage')->name('page');
