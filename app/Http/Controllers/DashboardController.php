<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard_admin', [
            'title' => 'Dashboard'
        ]);
    }
    public function artikel(){
        return view('admin.pages.artikel_admin', [
            'title' => 'Artikel'
        ]);
    }
    public function datapeta(){
        return view('admin.pages.datapeta_admin', [
            'title' => 'DataPeta'
        ]);
    }
    public function lapor(){
        return view('admin.pages.lapor_admin', [
            'title' => 'Lapor'
        ]);
    }
}
