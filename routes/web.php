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
    return view('layout.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('guru', 'Admin\MasterGuruController');

Route::get('/siswa', function () {
    return view('admin.master.siswa.index');
});

Route::get('/mapel', function () {
    return view('admin.master.mapel.index');
});

Route::get('/kelas', function () {
    return view('admin.master.kelas.index');
});
