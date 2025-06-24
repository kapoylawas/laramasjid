<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisasi;

class OrganisasiController extends Controller
{
    //
    public function index()
    {
        $organisasi = Organisasi::all();
        return view('admin.organisasi.index', compact('organisasi'));
    }

    public function create()
    {
        return view('admin.organisasi.create');
    }

    public function store(Request $request)
    {
      $validated = $request->validate([
        'name' => 'required|string|max:255',
        'jabatan' => 'required|string|max:255',
        'hp' => 'required|string|max:20',
    ]);

    // Upload gambar
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('organisasi', 'public');
    }

        Organisasi::create([
            'image' => $imagePath ?? null, // Simpan path gambar
            'name' => $validated['name'],
            'jabatan' => $validated['jabatan'],
            'hp' => $validated['hp'],
        ]);

    return redirect()->route('admin.organisasi.index')->with('success', 'Data organisasi berhasil ditambahkan');
    }

     public function edit(Organisasi $organisasi)
    {
        return view('admin.organisasi.edit', compact('organisasi'));
    }
}
