@extends('dashboard.admin')

@section('title', 'ARMADA - Form Edit Paket')
@section('subjudul', 'Edit Paket')
@section('slidekanan', 'Catalog Kursus')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <!-- <h1 class="mt-3">Edit Paket</h1> -->
                    <form method="POST" action="/services/{{ $service->id }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="jenis_paket" class="form-label">jenis Paket</label>
                            <input type="text" class="form-control @error('jenis_paket') is-invalid @enderror" id="jenis_paket" placeholder="Masukkan jenis paket" name="jenis_paket" value="{{ $service->jenis_paket }}">
                            @error('jenis_paket')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="durasi_latihan" class="form-label">durasi Latihan</label>
                            <input type="text" class="form-control @error('durasi_latihan') is-invalid @enderror" id="durasi_latihan" placeholder="Masukkan durasi latihan" name="durasi_latihan" value="{{ $service->durasi_latihan }}">
                            @error('durasi_latihan')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pelajar_dan_mahasiswa" class="form-label">Biaya Paket</label>
                            <input type="text" class="form-control @error('pelajar_dan_mahasiswa') is-invalid @enderror" id="pelajar_dan_mahasiswa" placeholder="Masukkan pelajar_dan_mahasiswa" name="pelajar_dan_mahasiswa" value="{{ $service->pelajar_dan_mahasiswa }}">
                            @error('pelajar_dan_mahasiswa')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="umum" class="form-label">Bonus</label>
                            <input type="text" class="form-control @error('umum') is-invalid @enderror" id="umum" placeholder="Masukkan bonus" name="umum" value="{{ $service->umum }}">
                            @error('umum')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mb-3">Update</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
