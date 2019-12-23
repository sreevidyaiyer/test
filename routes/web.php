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

Route::post('/qualitative','QualitativeController@store')->name('qualitative');
Route::get('/qualitative','QuestionsController@qualitative');

Route::get('/comprehension','QuestionsController@comprehension');
Route::post('/comprehension','ComprehensionController@store');

Route::post('/analytical','AnalyticalController@store');
Route::get('/analytical','QuestionsController@analytical');

Route::post('creativity','CreativityController@store');
Route::get('creativity','QuestionsController@creativity');

Route::post('final','ResultController@qcorrect')->name('final');
Route::get('final','ResultController@qcorrect')->name('final');

Route::get('/viewfinal', function () {
    return view('viewfinal');
})->name('viewfinal');

Route::any('/qsubmit','AutoSubmitController@qsubmit')->name('qsubmit');
Route::any('/csubmit','AutoSubmitController@csubmit')->name('csubmit');
Route::any('/osubmit','AutoSubmitController@osubmit')->name('osubmit');
Route::any('/asubmit','AutoSubmitController@asubmit')->name('asubmit');
