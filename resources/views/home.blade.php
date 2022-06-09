@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Data Mahasiswa</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($mahasiswa as $mhs)
            <div class="col mt-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mhs->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $mhs->nrp }}</h6>
                        <p class="card-text">Email : {{ $mhs->email }}</p>
                        <p class="card-text">Alamat : {{ $mhs->alamat }}</p>
                        <a href="#" class="card-link bg-info bg-opacity-10 border rounded-5 p-1"><i class="bi bi-pencil-square"></i></a>
                        <a href="#" class="card-link bg-danger bg-opacity-10 border rounded-5 p-1"><i class="bi bi-trash-fill" style="color: rgb(192, 0, 0)"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
