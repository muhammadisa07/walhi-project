<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;

class WalhiController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'title' => 'Home',
            'artikels' => Artikel::latest()->paginate(3)
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
    public function Dashboard()
    {
        return view('pages.dashboard', [
            'title' => 'Dashboard'
        ]);
    }
    // menampilkan halaman artikel
    public function Artikel()
    {
        return view('pages.artikel', [
            'title' => 'Artikel',
            'artikels' => Artikel::latest()->paginate(6)
        ]);
    }

    public function DetailArtikel($id)
    {
        
        return view('pages.detailartikel', [
            'title' => 'Artikel',
            'artikel' => Artikel::find($id) 
        ]);
    }
    public function AllArtikel()
    {
        
        return view('pages.Allartikel', [
            'title' => 'Artikel',
            'artikels' => Artikel::all()
        ]);
    }
    // menampilkan halaman laporan
    public function Lapor()
    {
        return view('pages.lapor', [
            'title' => 'Lapor'
        ]);
    }
    // menampilkan halaman faq
    public function Faq()
    {
        return view('pages.faq', [
            'title' => 'Faq'
        ]);
    }
   
   
}
