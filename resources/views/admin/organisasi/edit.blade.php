@extends('layouts.backend.app', [
    'title' => 'Tambah Organisasi',
    'contentTitle' => 'Tambah Organisasi',
])
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.organisasi.index') }}" class="btn btn-success btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.organisasi.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input class="form-control" type="file" name="image" id="image" 
                                accept="image/jpeg, image/png, image/jpg, image/gif">
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input required class="form-control" type="text" name="name" id="name"
                                placeholder="Nama lengkap" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input required class="form-control" type="text" name="jabatan" id="jabatan"
                                placeholder="Jabatan dalam organisasi" value="{{ old('jabatan') }}">
                            @error('jabatan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="hp">No HP</label>
                            <input required class="form-control" type="tel" name="hp" id="hp"
                                placeholder="Nomor handphone" value="{{ old('hp') }}">
                            @error('hp')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
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
