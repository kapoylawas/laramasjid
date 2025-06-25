<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\Artikel;
use App\Models\JadwalSholat;
use App\Models\Keuangan;
use App\Models\Organisasi;
use App\Models\Pengumuman;
use App\Models\Pesan;

class HomeController extends Controller
{
    public function index()
    {
        $jadwalSholats = JadwalSholat::all();
        $keuangan = Keuangan::all();
        return view('home.index', [
            'agenda' => Agenda::latest()->take(2)->get(),
            'artikel' => Artikel::with(['user', 'kategoriArtikel'])->latest()->take(2)->get(),
            'pengumuman' => Pengumuman::with(['user'])->latest()->take(2)->get(),
            'jadwalSholats' => $jadwalSholats,
            'keuangan' => $keuangan,
        ]);
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        $organisasi = Organisasi::all();
        return view('home.contact', compact('organisasi'));
    }

    public function kirimPesan(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        // Simpan ke database
        Pesan::create([
            'name' => $request->name,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
