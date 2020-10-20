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
    return view('admin.dashboard');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resources([
    'guru' => 'Admin\MasterGuruController',
    'kelompok_mapel' => 'Admin\KelompokMapelController',
    'mapel' => 'Admin\MapelController',
    'jadwal_pelajaran' => 'Admin\JadwalPelajaranController',
    'agama' => 'Admin\AgamaController',
    'negara' => 'Admin\NegaraController',
    'jenis_ptk' => 'Admin\PtkController',
    'tahun_akademik' => 'Admin\TahunAkademikController',
    'profil_sekolah' => 'Admin\ProfilSekolahController',
]);

Route::get('siswa', function () {
    return view('admin.master.siswa.index');
});

// Route::get('mapel', function () {
//     return view('admin.master.mapel.index');
// });

// Route::get('kelas', function () {
//     return view('admin.master.kelas.index');
// });