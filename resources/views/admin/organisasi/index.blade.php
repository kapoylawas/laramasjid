@extends('layouts.backend.app', [
    'title' => 'Organisasi',
    'contentTitle' => 'Organisasi',
])
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')
    <x-alert></x-alert>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.organisasi.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
                <div class="card-body table-responsive">
                    <table id="dataTable1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>image</th>
                                <th>Name</th>
                                <th>jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($organisasi as $os)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        @if ($os->image)
                                            <img src="{{ asset('storage/' . $os->image) }}" alt="{{ $os->name }}"
                                                style="max-width: 100px; max-height: 100px;" class="img-thumbnail">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $os->name }}</td>
                                    <td>{{ $os->jabatan }}</td>
                                    <td>
                                        <div class="row ml-2">
                                            <form method="POST" action="{{ route('admin.organisasi.destroy', $os->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Yakin hapus ?')" type="submit"
                                                    class="btn btn-danger btn-sm ml-2"><i
                                                        class="fas fa-trash fa-fw"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <!-- DataTables -->
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js">
    </script>
    <script>
        $(function() {
            $("#dataTable1").DataTable();
            $('#dataTable2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });
    </script>
@endpush
