@extends('layouts.tampilan')

@section('content')
    <div class="container">
        <h2>Edit Jurusan</h2>
        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama Jurusan</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $jurusan->nama }}" required>
            </div>
            <div class="form-group">
                <label for="jenjang">Jenjang</label>
                <select class="form-control" id="jenjang" name="jenjang" required>
                    <option value="D3" {{ $jurusan->jenjang === 'D3' ? 'selected' : '' }}>D3</option>
                    <option value="S1" {{ $jurusan->jenjang === 'S1' ? 'selected' : '' }}>S1</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
