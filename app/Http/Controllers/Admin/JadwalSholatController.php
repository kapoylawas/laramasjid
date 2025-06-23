<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalSholat;
use Illuminate\Http\Request;

class JadwalSholatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwalSholat = JadwalSholat::all();
        return view('admin.jadwal-sholat.index', compact('jadwalSholat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jadwal-sholat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JadwalSholat::create($request->all());
        return redirect()->route('admin.jadwal-sholat.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JadwalSholat  $jadwalSholat
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalSholat $jadwalSholat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JadwalSholat  $jadwalSholat
     * @return \Illuminate\Http\Response
     */
    public function edit(JadwalSholat $jadwalSholat)
    {
        return view('admin.jadwal-sholat.edit', compact('jadwalSholat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JadwalSholat  $jadwalSholat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JadwalSholat $jadwalSholat)
    {
        $jadwalSholat->update($request->all());
        return redirect()->route('admin.jadwal-sholat.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalSholat  $jadwalSholat
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalSholat $jadwalSholat)
    {
        $jadwalSholat->delete();
        return redirect()->route('admin.jadwal-sholat.index')->with('success', 'Data berhasil dihapus');
    }
}
