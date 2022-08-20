<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('home');
    }

    public function produk() {
        return view('product');
    }

    public function porto() {
        return view('portfolio');
    }

    public function tentang() {
        return view('about');
    }
}
