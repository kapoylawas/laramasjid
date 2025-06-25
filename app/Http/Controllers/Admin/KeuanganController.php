<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function index()
    {
        $keuangan = Keuangan::all();
        return view('admin.keuangan.index', compact('keuangan'));
    }

    public function create()
    {
        return view('admin.keuangan.create');
    }

    public function store(Request $request)
    {
        Keuangan::create($request->all());
        return redirect()->route('admin.keuangan.index')->with('success', 'Data berhasil ditambah');
    }

    public function destroy(Keuangan $keuangan)
    {
        $keuangan->delete();
        return redirect()->route('admin.keuangan.index')->with('success', 'Data berhasil dihapus');
    }
}
