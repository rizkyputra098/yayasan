<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserKegiatanController extends Controller{
    public function index(){
        return view("user.userkegiatan");
    }
}