@extends('layouts.tampilan')

@section('content')
    <div class="container">
        <h2>Data Jurusan</h2>
        <a href="{{ route('jurusan.create') }}" class="btn btn-secondary btn-sm">Tambah Jurusan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Jurusan</th>
                    <th>Jenjang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurusans as $jurusan)
                    <tr>
                        <td>{{ $jurusan->nama }}</td>
                        <td>{{ $jurusan->jenjang }}</td>
                        <td>
                            <a href="{{ route('jurusan.show', $jurusan->id) }}" class="btn btn-outline-secondary">Detail</a>
                            <a href="{{ route('jurusan.edit', $jurusan->id) }}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{ route('jurusan.destroy', $jurusan->id) }}" method="POST" style="display: inline;">
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
