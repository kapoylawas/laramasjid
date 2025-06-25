@extends('layouts.backend.app', [
    'title' => 'Tambah Keuangan',
    'contentTitle' => 'Tambah Keuangan',
])
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.keuangan.index') }}" class="btn btn-success btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.keuangan.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input required="" class="form-control" type="date" name="tanggal" id="tanggal"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="uang_keluar">Uang keluar</label>
                            <input required="" class="form-control" type="" name="uang_keluar" id="uang_keluar"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="saldo_akhir">Saldo akhir</label>
                            <input required="" class="form-control" type="" name="saldo_akhir" id="saldo_akhir"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input required="" class="form-control" type="" name="keterangan" id="keterangan"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
