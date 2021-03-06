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

Auth::routes();



Route::prefix('/')->group(function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth'])->prefix('/admin')->group(function(){
    Route::get('/','GobermentController@index')->name('Gomerment');
    Route::get('/goberment/get','GobermentController@getAll')->name('GetAllGomerment');
    Route::get('/parties','PoliticalPartiesController@index')->name('Gomerment');
    Route::get('/entities','EntityController@index')->name('Gomerment');
    Route::get('/reports','ReportController@index')->name('Gomerment');
    Route::get('/actions','ActionsController@index')->name('Gomerment');
});