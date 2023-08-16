@extends('layouts.tampilan')

@section('content')
    <div class="container">
        <h2>Tambah Nilai</h2>
        <form action="{{ route('nilai.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="mahasiswa_id">Mahasiswa</label>
                <select class="form-control" id="mahasiswa_id" name="mahasiswa_id" required>
                    @foreach ($mahasiswas as $mahasiswa)
                        <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="matakuliah_id">Matakuliah</label>
                <select class="form-control" id="matakuliah_id" name="matakuliah_id" required>
                    @foreach ($matakuliahs as $matakuliah)
                        <option value="{{ $matakuliah->id }}">{{ $matakuliah->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nilai_harian">Nilai Harian</label>
                <input type="number" class="form-control" id="nilai_harian" name="nilai_harian" required>
            </div>
            <div class="form-group">
                <label for="nilai_uts">Nilai UTS</label>
                <input type="number" class="form-control" id="nilai_uts" name="nilai_uts" required>
            </div>
            <div class="form-group">
                <label for="nilai_akhir">Nilai Akhir</label>
                <input type="number" class="form-control" id="nilai_akhir" name="nilai_akhir" required>
            </div>
            <div class="form-group">
                <label for="grade">Grade</label>
                <input type="text" class="form-control" id="grade" name="grade" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
