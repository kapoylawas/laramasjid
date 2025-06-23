<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\Artikel;
use App\Models\JadwalSholat;
use App\Models\Pengumuman;

class HomeController extends Controller
{
    public function index()
    {
        $jadwalSholats = JadwalSholat::all();
        return view('home.index', [
            'agenda' => Agenda::latest()->take(2)->get(),
            'artikel' => Artikel::with(['user', 'kategoriArtikel'])->latest()->take(2)->get(),
            'pengumuman' => Pengumuman::with(['user'])->latest()->take(2)->get(),
            'jadwalSholats' => $jadwalSholats
        ]);
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
