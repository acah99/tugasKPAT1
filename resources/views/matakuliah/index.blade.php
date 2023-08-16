@extends('layouts.tampilan')

@section('content')
    <div class="container">
        <h2>Data Matakuliah</h2>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-secondary btn-sm">Tambah Matakuliah</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Semester</th>
                    <th>SKS Teori</th>
                    <th>SKS Praktikum</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matakuliah as $matkul)
                    <tr>
                        <td>{{ $matkul->nama }}</td>
                        <td>{{ $matkul->semester }}</td>
                        <td>{{ $matkul->sks_teori }}</td>
                        <td>{{ $matkul->sks_praktikum }}</td>
                        <td>{{ $matkul->jurusan->nama }}</td>
                        <td>
                            <a href="{{ route('matakuliah.show', $matkul->id) }}" class="btn btn-outline-secondary">Detail</a>
                            <a href="{{ route('matakuliah.edit', $matkul->id) }}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{ route('matakuliah.destroy', $matkul->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
