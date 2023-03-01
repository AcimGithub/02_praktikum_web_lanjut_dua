<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Muhammad Lukman Hakim<br>2141720109';
    }
    public function articles($id) {
        return "Artikel dengan ID $id";
    }
 
}
