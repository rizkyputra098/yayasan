<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserKunjunganController extends Controller{
    public function index(){
        return view("user.userkunjungan");
    }
}