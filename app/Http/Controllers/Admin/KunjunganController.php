<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class KunjunganController extends Controller{
    public function index(){
        return view('admin.kunjungan.kunjungan');
    }
}