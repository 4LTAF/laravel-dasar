<?php

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('laravel', function () {
    return 'halo laravel';
});

// //parameter wajib
// Route::get('/nama-framework/{nama}/umur-saya/{umur}', function ($nama,$umur) {
//     return 'Nama saya adalah : ' . $nama .
//     '<br> Umur saya : '. $umur;
// });

// //parameter opsional ciri(?)
// Route::get('/nama-saya-adalah/{nama?}', function ($nama = 'User tidak mengisi'){
//     return 'Nama Saya Adalah : ' . $nama;
// });

// //Route::get('/hitung-luas-segitiga/{alas}/tinggi/{tinggi}', function ($alas, $tinggi){
// //    $hasil = $alas * $tinggi;
// //    return 'Hasil Luas Segitia adalah: ' . $hasil;
// //});

// Route::get('/hitung-luas-segitiga/{alas?}/{tinggi?}', function ($alas = 1, $tinggi = 1){
//     $hasil = $alas * $tinggi;
//     return 'Hasil Luas Segitia adalah: ' . $hasil;
// });

// Route::group(['prefix' => 'jurusan'], function (){
//     Route::get('/' , function(){
//         return 'Berhasil';
//     });
//     Route::get('/kelas/{namaKelas}', function($namaKelas){
//         return $namaKelas;
//     });
//     Route::get('/wali-kelas/{nama}', function($nama){
//         return $nama;
//     });
// });

// Route::get('data-siswa', [DataSiswaController::class, 'datasiswa']);
// Route::get('nama/{nama}', [DataSiswaController::class, 'nama']);

// Route::resource('user', UserController::class);

// Route::get('indexcontoh', function(){
//     return view('indexcontoh');
// });

// Route::get('sadjiasiojioadsjiasdiojas', function(){
//     return view('album');
// })->name('album');

// //project
// Route::get('beranda', function(){
//     return view('beranda');
// })->name('beranda');

// Route::get('about', function(){
//     return view('about');
// })->name('about');

// Route::get('post', function(){
//     return view('post');
// })->name('post');

// Route::get('contact', function(){
//     return view('contact');
// })->name('contact');

Route::resource('user', UserController::class);
