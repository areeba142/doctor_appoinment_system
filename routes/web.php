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
Route::resource('/submit', 'PatientController');
Route::resource('/submit', 'DoctorController');
Route::get('/', function () {
    return view('main');
});
Route::get('/patientcreate', function () {
    return view('patientcreate');
});
Route::get('/patientportal', function () {
    return view('patientportal');
});
Route::get('/doctorcreate', function () {
    return view('doctorcreate');
});