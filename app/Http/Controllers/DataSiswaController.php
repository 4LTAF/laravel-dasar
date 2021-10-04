<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function datasiswa(){
        $nama = 'Altaf';
        return $nama;
    }
    public function datasiswi(){
        $nama = 'Rahma';
        return $nama;
    }
    public function nama($nama){
        return 'Nama Anda adalah : ' . $nama;
    }
}