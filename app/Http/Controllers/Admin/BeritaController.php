<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BeritaController extends Controller{
    public function index(){
        return view('admin.berita.berita');
    }
    public function create(){
        return view('admin.berita.tambahberita');
    }
}