@extends('layouts.tampilan')

@section('content')
    <div class="container">
        <h2>Detail Matakuliah</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>Nama Matakuliah</th>
                        <td>{{ $matakuliah->nama }}</td>
                    </tr>
                    <tr>
                        <th>Semester</th>
                        <td>{{ $matakuliah->semester }}</td>
                    </tr>
                    <tr>
                        <th>SKS Teori</th>
                        <td>{{ $matakuliah->sks_teori }}</td>
                    </tr>
                    <tr>
                        <th>SKS Praktikum</th>
                        <td>{{ $matakuliah->sks_praktikum }}</td>
                    </tr>
                    <tr>
                        <th>Jurusan</th>
                        <td>{{ $matakuliah->jurusan->nama }}</td>
                    </tr>
                </table>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
