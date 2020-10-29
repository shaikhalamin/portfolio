<?php

use Barryvdh\DomPDF\Facade as PDF;
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

Route::get('/test', function () {
    $pdf = PDF::loadView('dom-test');
    return $pdf->download('invoice.pdf');
});

Route::get('/', 'ProfileController@index')->name('profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.index');

Route::get('profiles', 'ProfileController@indexAdmin')->name('profiles.index');
Route::get('profiles/cv-download/{profile_id}', 'ProfileController@downloadCv')->name('profiles.download_cv');

Route::resource('profiles', 'ProfileController')->except(['index']);

Route::resource('experiences', 'ExperienceController');
Route::resource('skills', 'SkillController');
