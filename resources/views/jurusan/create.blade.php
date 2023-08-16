@extends('layouts.tampilan')

@section('content')
    <div class="container">
        <h2>Tambah Jurusan</h2>
        <form action="{{ route('jurusan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Jurusan</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jenjang">Jenjang</label>
                <select class="form-control" id="jenjang" name="jenjang" required>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
