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

//Matkul
//show all data 
Route::get('/matkul', 'MatkulController@index');

//insert
Route::get('/matkul/create', 'MatkulController@create');
Route::post('/matkul', 'MatkulController@store');

//show
Route::get('/matkul/{id}', 'MatkulController@show');

//update data
Route::get('/matkul/{id}/edit', 'MatkulController@edit');
Route::put('/matkul/{id}', 'MatkulController@update');

//delete
Route::delete('/matkul/{id}', 'MatkulController@destroy');



//Tugas
//show all data 
Route::get('/tugas', 'TugasController@index');

//insert
Route::get('/tugas/create', 'TugasController@create');
Route::post('/tugas', 'TugasController@store');

//show
Route::get('/tugas/{id}', 'TugasController@show');

//update data
Route::get('/tugas/{id}/edit', 'TugasController@edit');
Route::put('/tugas/{id}', 'TugasController@update');

//delete
Route::delete('/tugas/{id}', 'TugasController@destroy');



//Mahasiswa
//show all data 
Route::get('/Mahasiswa', 'MahasiswaController@index');

//insert
Route::get('/Mahasiswa/create', 'MahasiswaController@create');
Route::post('/Mahasiswa', 'MahasiswaController@store');

//show
Route::get('/Mahasiswa/{id}', 'MahasiswaController@show');

//update data
Route::get('/Mahasiswa/{id}/edit', 'MahasiswaController@edit');
Route::put('/Mahasiswa/{id}', 'MahasiswaController@update');

//delete
Route::delete('/Mahasiswa/{id}', 'MahasiswaController@destroy');
