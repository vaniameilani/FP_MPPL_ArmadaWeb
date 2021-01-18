@extends('dashboard.admin')

@section('title', 'ARMADA - Form Edit Instruktur')
@section('subjudul', 'Edit Data Instruktur')
@section('slidekanan', 'Instruktur')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <!-- <h1 class="mt-3">Edit Data Mobil</h1> -->
                    <form method="POST" action="/admin/instructors/{{ $instructor->id }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan nama" name="name" value="{{ $instructor->name }}">
                            @error('name')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" placeholder="Masukkan nomor Alamat mobil" name="Alamat" value="{{ $instructor->alamat }}">
                            @error('Alamat')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="Masukkan no_telp mesin mobil" name="no_telp" value="{{ $instructor->no_telp }}">
                            @error('no_telp')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email mobil" name="email" value="{{ $instructor->email }}">
                            @error('email')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mb-3">Update</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
