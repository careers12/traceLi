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

// Route::get('/','welcome', function () {
//     return view('welcome');
// });

Route::get('/','PagesRenderController@getIndex')->name('welcome');
Route::get('traceviews/services','PagesRenderController@getService')->name('page.service');
// Route::get('/layouts/app',function(){
//     return view('layouts.app');
// } );
Route::get('traceviews/track','PagesRenderController@getTrack')->name('page.track');
Route::get('traceviews/portfolio','PagesRenderController@getAbout')->name('page.about');
Route::get('traceviews/contact','PagesRenderController@getContact')->name('page.contact');
Route::get('traceviews/account','PagesRenderController@getAccount')->name('page.account');
Route::get('traceviews/condisread','PagesRenderController@getCondisread')->name('page.condisread');
Route::get('traceviews/dryvanread','PagesRenderController@getDryvanread')->name('page.dryvanread');
Route::get('traceviews/flatbedread','PagesRenderController@getFlatbedread')->name('page.flatbedread');
Route::get('traceviews/fleetecfacread','PagesRenderController@getFleetecfacread')->name('page.fleetecfacread');
Route::get('traceviews/fleetmanread','PagesRenderController@getFleetmanread')->name('page.fleetmanread');
Route::get('traceviews/genhauread','PagesRenderController@getGenhauread')->name('page.genhauread');
Route::get('traceviews/heahauread.','PagesRenderController@getHeahauread')->name('page.heahauread');
Route::get('traceviews/phdread','PagesRenderController@getPhdread')->name('page.phdread');
Route::get('traceviews/Refrigeratedread','PagesRenderController@getRefrigeratedread')->name('page.refrigeratedread');

