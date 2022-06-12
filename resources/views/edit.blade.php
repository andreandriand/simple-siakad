@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-bold">Edit Data Mahasiswa</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <form action="/edit/{{ $mhs->nrp }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group mb-2">
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama" value="{{ old('nama', $mhs->nama) }}" required>
                        @error('nama')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="nrp">NRP :</label>
                        <input type="number" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="NRP" value="{{ old('nrp', $mhs->nrp) }}" required>
                        @error('nrp')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email :</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email', $mhs->email) }}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <label for="alamat">Alamat :</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" required>{{ old('alamat', $mhs->alamat) }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">
                                    {{ $message }}   
                            </div>
                        @enderror                        
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection