<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalhiController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => 'Home'
        ]);
    }
    // menampilkan halaman PeduliLingkungan
    public function PLingkungan()
    {
        return view('pages.PLingkungan', [
            'title' => 'Pantau Lingkungan'
        ]);
    }
    // menampilkan halaman dashboard
    public function dashboard()
    {
        return view('pages.dashboard', [
            'title' => 'Dashboard'
        ]);
    }
    // menampilkan halaman artikel
    public function artikel()
    {
        return view('pages.artikel', [
            'title' => 'Artikel'
        ]);
    }
    // menampilkan halaman laporan
    public function lapor()
    {
        return view('pages.lapor', [
            'title' => 'Lapor'
        ]);
    }
    // menampilkan halaman faq
    public function faq()
    {
        return view('pages.faq', [
            'title' => 'Faq'
        ]);
    }
}
