@extends('layouts.tampilan')

@section('content')
    <div class="container">
        <h2>Data Nilai</h2>
        <a href="{{ route('nilai.create') }}" class="btn btn-secondary btn-sm">Tambah Nilai</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Mahasiswa</th>
                    <th>Matakuliah</th>
                    <th>Nilai Harian</th>
                    <th>Nilai UTS</th>
                    <th>Nilai Akhir</th>
                    <th>Grade</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilai as $n)
                    <tr>
                        <td>{{ $n->mahasiswa->nama }}</td>
                        <td>{{ $n->matakuliah->nama }}</td>
                        <td>{{ $n->nilai_harian }}</td>
                        <td>{{ $n->nilai_uts }}</td>
                        <td>{{ $n->nilai_akhir }}</td>
                        <td>{{ $n->grade }}</td>
                        <td>
                            <a href="{{ route('nilai.show', $n->id) }}" class="btn btn-outline-secondary">Detail</a>
                            <a href="{{ route('nilai.edit', $n->id) }}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{ route('nilai.destroy', $n->id) }}" method="POST" style="display: inline;">
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
