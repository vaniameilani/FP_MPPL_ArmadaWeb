@extends('dashboard.admin')

@section('title', 'ARMADA - Detail Instruktur')
@section('subjudul', 'Detail Instruktur')
@section('slidekanan', 'Instruktur')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7 mt-3">
                <!-- <h1 class="mt-3">Detail Mobil</h1> -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $instructor->name }}</h4>
                        <h6 class="card-text">{{ $instructor->alamat }}</h6>
                        <p class="card-text">{{ $instructor->no_telp }}</p>
                        <p class="card-text">{{ $instructor->email }}</p>
                    
                        <a href="{{ $instructor->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/admin/instructors" class="card-link">Back</a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
