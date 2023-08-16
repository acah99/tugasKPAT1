@extends('layouts.tampilan')

@section('content')
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-secondary btn-sm">Tambah Mahasiswa</a>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->alamat }}</td>
                        <td>{{ $mhs->jenis_kelamin }}</td>
                        <td>
                            <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="btn btn-outline-secondary">Detail</a>
                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display: inline;">
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
