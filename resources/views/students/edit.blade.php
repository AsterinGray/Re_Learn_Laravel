@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
                <form method="POST" action="/students/{{ $student->id }}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="Nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}">
                    </div>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan nrp" name="nrp" value="{{ $student->nrp }}">
                    </div>
                    @error('nrp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{ $student->email }}">
                    </div>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{ $student->jurusan }}">
                    </div>
                    @error('jurusan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Ubah Data!</button>
                </form>
            </div>
        </div>
    </div>
@endsection