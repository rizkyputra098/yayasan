<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class KegiatanController extends Controller {
    public function index (){
        return view('admin.kegiatan.kegiatan');
    }
}