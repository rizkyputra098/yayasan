<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AnakController extends Controller
{
    public function index(){
        return view('admin.anak.dataanak');
    }

    public function create(){
        return view('admin.anak.tambahanak');
    }
}