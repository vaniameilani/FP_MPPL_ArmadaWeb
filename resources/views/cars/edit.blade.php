@extends('dashboard.admin')

@section('title', 'ARMADA - Form Edit Mobil')
@section('subjudul', 'Edit Data Mobil')
@section('slidekanan', 'Mobil')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <!-- <h1 class="mt-3">Edit Data Mobil</h1> -->
                    <form method="POST" action="/cars/{{ $car->id }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="merk_mobil" class="form-label">Nama Merk Mobil</label>
                            <input type="text" class="form-control @error('merk_mobil') is-invalid @enderror" id="merk_mobil" placeholder="Masukkan nama mobil" name="merk_mobil" value="{{ $car->merk_mobil }}">
                            @error('merk_mobil')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no_polisi" class="form-label">Nomor Plat Mobil</label>
                            <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" id="no_polisi" placeholder="Masukkan nomor plat mobil" name="no_polisi" value="{{ $car->no_polisi }}">
                            @error('no_polisi')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jenis_mesin" class="form-label">Jenis Mesin Mobil</label>
                            <input type="text" class="form-control @error('jenis_mesin') is-invalid @enderror" id="jenis_mesin" placeholder="Masukkan jenis mesin mobil" name="jenis_mesin" value="{{ $car->jenis_mesin }}">
                            @error('jenis_mesin')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="warna_mobil" class="form-label">Warna Mobil</label>
                            <input type="text" class="form-control @error('warna_mobil') is-invalid @enderror" id="warna_mobil" placeholder="Masukkan Warna mobil" name="warna_mobil" value="{{ $car->warna_mobil_mobil }}">
                            @error('warna_mobil')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tahun_mesin" class="form-label">Tahun Mesin Mobil</label>
                            <input type="text" class="form-control @error('tahun_mesin') is-invalid @enderror" id="tahun_mesin" placeholder="Masukkan tahun mesin mobil" name="tahun_mesin" value="{{ $car->tahun_mesin }}">
                            @error('tahun_mesin')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mb-3">Update</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
