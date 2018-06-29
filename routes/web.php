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


Route::get('/members', function () {
    return view('members');
});

Route::get('/correct', function () {
    return view('correct');
});

Route::get('/incorrect', function () {
    return view('incorrect');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rinen', function () {
    return view('rinen');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/photos', function () {
    return view('photos');
});

Route::get('/division-intro', function () {
    return view('division-intro');
});




Route::get('/recruit', function () {
    return view('recruits/recruit');
});

Route::get('/graduate', function () {
    return view('recruits/graduate');
});

Route::get('/agreement', function () {
    return view('recruits/agreement');
});

Route::get('/career', function () {
    return view('recruits/career');
});

Route::get('/grobal', function () {
    return view('recruits/grobal');
});

Route::get('/mba', function () {
    return view('recruits/mba');
});

Route::get('/special', function () {
    return view('recruits/special');
});

Route::get('/access', function(){
    return view('access');
});

Route::get('/question', function(){
    return view('question');
});



