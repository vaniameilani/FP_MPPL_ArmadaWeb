@extends('dashboard.admin')

@section('title', 'ARMADA - Detail Mobil')
@section('subjudul', 'Detail Mobil')
@section('slidekanan', 'Mobil')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7 mt-3">
                <!-- <h1 class="mt-3">Detail Mobil</h1> -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $car->merk_mobil }}</h4>
                        <h6 class="card-text text-muted">{{ $car->no_polisi }}</h6>
                        <p class="card-text">{{ $car->jenis_mesin }}</p>
                        <p class="card-text">{{ $car->warna_mobil }}</p>
                        <p class="card-text">{{ $car->tahun_mesin }}</p>
                    
                        <a href="{{ $car->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/cars/{{ $car->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/cars" class="card-link">Back</a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
