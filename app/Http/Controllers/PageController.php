<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Nama: Erina Seviyanti <br> NIM: 2031710012";
    }
    public function article($id){
        return "Halaman article dengan Id'$id'";
    }
}
