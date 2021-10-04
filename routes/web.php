<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Assalamualaikum';
});

Route::get('laravel', function () {
    return 'halo laravel';
});

//parameter wajib
Route::get('/nama-framework/{nama}/umur-saya/{umur}', function ($nama,$umur) {
    return 'Nama saya adalah : ' . $nama . 
    '<br> Umur saya : '. $umur;
});

//parameter opsional ciri(?)
Route::get('/nama-saya-adalah/{nama?}', function ($nama = 'User tidak mengisi'){
    return 'Nama Saya Adalah : ' . $nama;
});

//Route::get('/hitung-luas-segitiga/{alas}/tinggi/{tinggi}', function ($alas, $tinggi){
//    $hasil = $alas * $tinggi;
//    return 'Hasil Luas Segitia adalah: ' . $hasil;
//});

Route::get('/hitung-luas-segitiga/{alas}/{tinggi}', function ($alas = 1, $tinggi = 1){
    $hasil = $alas * $tinggi;
    return 'Hasil Luas Segitia adalah: ' . $hasil;
});

Route::group(['prefix' => 'jurusan'], function (){
    Route::get('/' , function(){
        return 'Berhasil';
    });
    Route::get('/kelas/{namaKelas}', function($namaKelas){
        return $namaKelas;
    });
    Route::get('/wali-kelas/{nama}', function($nama){
        return $nama;
    });
});