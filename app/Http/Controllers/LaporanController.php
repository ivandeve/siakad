<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index() {

    }
    public function rekaplaporan(){
        return view('laporan.rekaplaporan');
    }
    public function jumlahdosen(){
        return view('laporan.jumlahdosen');
    }
    public function jumlahmahasiswa(){
        return view('laporan.jumlahmahasiswa');
    }
}
