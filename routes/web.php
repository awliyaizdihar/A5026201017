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
// Route::get('etsnantiganti', function () {
//     return view('htmlets');
// });
Route::get('tugas4', function () {
    return view('tugas4017');
});
Route::get('praktikum2', function () {
    return view('prak2017');
});
Route::get('ets', "ViewController@showETS");
Route::get('tugasphp', "ViewController@showBubsort");
Route::post('bubblesort', "ViewController@resultBubsort");

Route::get('isiannama',"ViewController@showForm") ;
Route::post('greetings',"ViewController@resultGreetings");

//route CRUD pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');
Route::get('/absen/view/{id}','AbsenController@detail');

//route CRUD mouse
Route::get('/mouse','MouseController@index');
Route::get('/mouse/cari','MouseController@cari');
Route::get('/mouse/tambah','MouseController@tambah');
Route::post('/mouse/store','MouseController@store');
Route::get('/mouse/edit/{id}','MouseController@edit');
Route::post('/mouse/update','MouseController@update');
Route::get('/mouse/view/{id}','MouseController@detail');
Route::get('/mouse/hapus/{id}','MouseController@hapus');

//route CRUD absennov
Route::get('/absennov','AbsennovController@indexabsen');
Route::get('/absennov/add','AbsennovController@add');
Route::post('/absennov/store','AbsennovController@store');
Route::get('/absennov/edit/{id}','AbsennovController@edit');
Route::post('/absennov/update','AbsennovController@update');
Route::get('/absennov/hapus/{id}','AbsennovController@hapus');
