@extends('layouts.instructor')

@section('title', 'Dashboard/Instruktur')
@section('container')
<h2 class="mt-5 mb-3 fw-bolder container">Evaluasi</h2>
<div class="container">
    <div class="row">
        <div class="col-7">
            <!-- <h1 class="mt-3">Tambah Mobil</h1> -->
                <form method="POST" action="">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="mesin" class="form-label">Menyalakan Mesin</label>
                        <textarea type="text" class="form-control @error('mesin') is-invalid @enderror" id="mesin" placeholder="" name="mesin" value="{{ old('mesin')}}"></textarea>
                        @error('mesin')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gigi" class="form-label">Perpindahan Gigi</label>
                        <textarea type="text" class="form-control @error('gigi') is-invalid @enderror" id="gigi" placeholder="" name="gigi" value="{{ old('gigi')}}"></textarea>
                        @error('gigi')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="rem" class="form-label">Menginjak Rem</label>
                        <textarea type="text" class="form-control @error('rem') is-invalid @enderror" id="rem" placeholder="" name="rem" value="{{ old('rem')}}"></textarea>
                        @error('rem')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="haluan" class="form-label">Haluan</label>
                        <textarea type="text" class="form-control @error('haluan') is-invalid @enderror" id="haluan" placeholder="" name="haluan" value="{{ old('haluan')}}"></textarea>
                        @error('haluan')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="parkir" class="form-label">Parkir</label>
                        <textarea type="text" class="form-control @error('parkir') is-invalid @enderror" id="parkir" placeholder="" name="parkir" value="{{ old('parkir')}}"></textarea>
                        @error('parkir')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nilai" class="form-label">Nilai Akhir</label>
                        <textarea type="text" class="form-control @error('nilai') is-invalid @enderror" id="nilai" placeholder="" name="nilai" value="{{ old('nilai')}}"></textarea>
                        @error('nilai')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Add</button>
                </form>
        </div>
    </div>
</div>
@endsection
