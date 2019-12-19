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

Route::post('/qualitative','QualitativeController@store');
Route::get('/qualitative','QuestionsController@qualitative');

Route::get('/comprehension','QuestionsController@comprehension');
Route::post('/comprehension','ComprehensionController@store');

Route::post('/analytical','AnalyticalController@store');
Route::get('/analytical','QuestionsController@analytical');

Route::post('creativity','CreativityController@store');
Route::get('creativity','QuestionsController@creativity');

Route::get('/final', function () {
    return view('final');
})->name('final');

Route::post('/final', function () {
    return view('final');
})->name('final');