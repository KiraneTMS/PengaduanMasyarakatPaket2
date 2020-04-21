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

Route::get('login', 'UserController@login');
Route::post('loginPost', 'UserController@loginPost');
Route::get('logout', 'UserController@logout');

Route::get('home', 'UserController@index');

Route::get('/', function () {
    return view('welcome');
});


Route::get('masyarakat/login', 'UserController@loginMasyarakat');
Route::post('masyarakat/loginPost', 'UserController@loginPostMasyarakat');
Route::get('masyarakat/register', 'UserController@registerMasyarakat');
Route::post('masyarakat/registerPost', 'UserController@registerPostMasyarakat');
Route::get('masyarakat/logout', 'UserController@logoutMasyarakat');

Route::get('masyarakat/home', 'UserController@indexMasyarakat');

Route::get('masyarakat/tambah', 'PengaduanController@tambah');
Route::post('masyarakat', 'PengaduanController@store');

Route::get('masyarakat/edit/{id_pengaduan}' ,'PengaduanController@edit');
Route::patch('masyarakat/{id_pengaduan}', 'PengaduanController@update');

Route::delete('masyarakat/hapus{id_pengaduan}', 'PengaduanController@destroy');


Route::get('admin/login', 'UserController@loginAdmin');
Route::post('admin/loginPost', 'UserController@loginPostAdmin');
Route::get('admin/register', 'UserController@registerAdmin');
Route::post('admin/registerPost', 'UserController@registerPostAdmin');
Route::get('admin/logout', 'UserController@logoutAdmin');

Route::get('admin/home', 'UserController@indexAdmin');


Route::get('petugas/login', 'UserController@loginPetugas');
Route::post('petugas/loginPost', 'UserController@loginPostPetugas');
Route::get('petugas/logout', 'UserController@logoutPetugas');

Route::get('petugas/home', 'UserController@indexPetugas');
Route::get('petugas/tanggapan','TanggapanController@viewTanggapan');

Route::get('petugas/tambah/{id_pengaduan}','TanggapanController@tambah');
Route::post('petugas/{id_pengaduan}','TanggapanController@store');

Route::get('petugas/edit/{id_pengaduan}','TanggapanController@edit');
Route::post('petugas/editPost/{id_pengaduan}','TanggapanController@update');

Route::delete('petugas/hapus{id_tanggapan}', 'TanggapanController@destroy');

Route::get('petugas/proses/{id_pengaduan}','TanggapanController@prosesPost');
