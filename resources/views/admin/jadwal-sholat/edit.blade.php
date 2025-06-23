@extends('layouts.backend.app', [
    'title' => 'Edit Jadwal Sholat',
    'contentTitle' => 'Edit Jadwal Sholat',
])
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.jadwal-sholat.index') }}" class="btn btn-success btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.jadwal-sholat.update', $jadwalSholat->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input value="{{ $jadwalSholat->name }}" required="" class="form-control" type=""
                                name="name" id="name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu</label>
                            <input value="{{ $jadwalSholat->waktu }}" required="" class="form-control" type=""
                                name="waktu" id="waktu" placeholder="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
