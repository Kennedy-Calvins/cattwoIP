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

Route::get('/student', function () {
    return view('Kennedy.student');
});

Route::get('/fees', function () {
    return view('Kennedy.fees');
});

Route::get('/home', function () {
    return view('Kennedy.home');
});


Route::get('/individualfees', function () {
    return view('Kennedy.individualfees');
});

Route::get('/searchStudent', "studentsController@index");
Route::get('/allstudents', "studentsController@index");

Route::get('/allstudentsfees', "feesController@indexes1");

Route::post('/allstudentsfees', "feesController@indexes");

Route::post('/registerstudent', 'studentsController@registerstudent');



//fee
Route::post('/schoolFee', 'feesController@schoolFee');

Route::get('/registerstudent', 'studentsController@registerstudent');

