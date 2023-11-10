<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function beritaAdmin(){
        return view('admin.berita');
    }
    public function lulusanAdmin(){
        return view('admin.lulusan');
    }
}