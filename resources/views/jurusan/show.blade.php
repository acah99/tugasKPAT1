@extends('layouts.tampilan')

@section('content')
    <div class="container">
        <h2>Detail Jurusan</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>Nama Jurusan</th>
                        <td>{{ $jurusan->nama }}</td>
                    </tr>
                    <tr>
                        <th>Jenjang</th>
                        <td>{{ $jurusan->jenjang }}</td>
                    </tr>
                </table>
                <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
