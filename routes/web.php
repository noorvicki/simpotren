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

//==================== Login ========================

Route::get('/', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//=================== Akademik ======================

Route::group(['middleware' => ['auth', 'checkRole:Santri,Pegawai,Admin,Superadmin']], function () {

    Route::get('/absensi', function () {
        return view('akademik.absensi');
    });
    Route::get('/data_kelas', function () {
        return view('akademik.data_kelas');
    });
    Route::get('/jadwal_pelajaran', function () {
        return view('akademik.jadwal_pelajaran');
    });
    Route::get('/mata_pelajaran', function () {
        return view('akademik.mata_pelajaran');
    });
    Route::get('/penilaian', function () {
        return view('akademik.penilaian');
    });
    Route::get('/raport_santri', function () {
        return view('akademik.raport_santri');
    });
});

//==================== Dashboard ======================

Route::group(['middleware' => ['auth', 'checkRole:Santri,Pegawai,Admin,Superadmin']], function () {

    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/data_gedung', function () {
        return view('dashboard.data_gedung');
    });
    Route::get('/data_kamar', function () {
        return view('dashboard.data_kamar');
    });
    Route::get('/data_ruang', function () {
        return view('dashboard.data_ruang');
    });
    Route::get('/data_santri', function () {
        return view('dashboard.data_santri');
    });
});


// ==================== kepegawaian ====================
//pegawai

Route::group(['middleware' => ['auth', 'checkRole:Pegawai,Admin,Superadmin']], function () {

    Route::get('/data_pegawai', 'PegawaiController@index');
    Route::post('/data_pegawai/store', 'PegawaiController@store');
    Route::get('/data_pegawai/hapus/{id}', 'PegawaiController@hapus');
    Route::get('/data_pegawai/update/', 'PegawaiController@update');

    //pegawai

    Route::get('/data_pengajar', 'PengajarController@index');
    Route::post('/data_pengajar/store', 'PengajarController@store');
    Route::get('/data_pengajar/hapus/{id}', 'PengajarController@hapus');
});

//=====================konfigurasi=======================

Route::get('/admin', function () {
    return view('konfigurasi.admin');
})->middleware(['auth', 'checkRole:Admin,Superadmin']);

Route::get('/superadmin', function () {
    return view('konfigurasi.superadmin');
})->middleware(['auth', 'checkRole:Superadmin']);

//===================== pembayaran ======================
Route::group(['middleware' => ['auth', 'checkRole:Santri,Pegawai,Admin,Superadmin']], function () {

    Route::get('/laporan_pembayaran', function () {
        return view('pembayaran.laporan_pembayaran');
    });
    Route::get('/pembayaran', function () {
        return view('pembayaran.pembayaran');
    });
});

//===================== Pendaftaran ======================

Route::group(['middleware' => ['auth', 'checkRole:Santri,Pegawai,Admin,Superadmin']], function () {

    Route::get('/pendaftaran', 'PendaftaranController@index');
    Route::post('/pendaftaran/edit', 'PendaftaranController@edit');
    Route::post('/pendaftaran/hapus', 'PendaftaranController@hapus');
});
