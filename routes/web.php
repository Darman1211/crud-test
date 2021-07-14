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

Route::get('/siswa','StudentController@index');
Route::get('/siswa/tambah','StudentController@tambah');
Route::post('/siswa/input','StudentController@create');

//edit
Route::get('/siswa/edit/{id}','SiswaController@edit');
Route::post('/siswa/update','SiswaController@update');

//hapus
Route::get('/siswa/hapus/{id}','SiswaController@hapus');