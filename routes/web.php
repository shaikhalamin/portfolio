<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'ProfileController@index')->name('profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.index');

Route::get('/admin/profile', 'ProfileController@indexAdmin')->name('admin.profile.index');
Route::get('/admin/profile/create', 'ProfileController@create')->name('admin.profile.create');
Route::post('/admin/profile/save', 'ProfileController@store')->name('admin.profile.save');

Route::group(['name' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function () {

    // URL: /admin/users
    // Route name: admin.users
    /* Route::get('users', function () {
        return 'Admin: user list';
    })->name('users'); */

    //Route::get('', 'AdminController@index')->name('index');


});
