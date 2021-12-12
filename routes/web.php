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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('logout', function (){
    return \Illuminate\Support\Facades\Auth::logout();
});

Auth::routes();


Route::middleware(['auth','admin'])->group(function (){
    Route::resource('/testimonial', 'TestimonialController');
    Route::resource('/courses', 'CoursesController');
    Route::get('/home', 'HomeController@index')->name('home');

});
Route::get('/index', 'IihtClientSiteController@index');
