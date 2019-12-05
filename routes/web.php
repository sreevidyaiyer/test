<?php

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

Route::get('/qualitative','QuestionsController@qualitative');
Route::get('/comprehension','QuestionsController@comprehension');
Route::get('/analytical','QuestionsController@analytical');
Route::get('/creativity','QuestionsController@creativity');