@extends('layouts.order')

@section('title', 'order')
@section('container')
<div class="container mt-5 text-cente">
    <main>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3 fw-bolder fs-3">Pemesanan</h4>
            <form method="POST" action="/order/success">
                @csrf
                <div class="col-sm-12 mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{ $users->nama }}" required>
                    @error('nama')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-sm-12 mb-3">
                    <label for="alamat" class="form-label">Alamat lengkap</label>
                    <input type="text" class="form-control" id="alamat" placeholder="" name="alamat" value="{{ $users->alamat }}" required>
                    @error('alamat')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label for="catalog" class="form-label">Paket Kursus</label>
                    <select class="form-select" id="catalog" name="catalog" value="{{ old('catalog')}}" required>
                        <option selected>Pilih jenis paket kursus</option>
                        @foreach ( $services as $svc )
                        <option >{{ $svc->jenis_paket }}</option>
                        @endforeach
                    </select>
                    @error('catalog')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>

                <hr class="my-4">

                <h4 class="mb-3 fw-bolder fs-3">Pembayaran</h4>
                <div class="my-3">
                    <label for="paymentOp" class="form-label">Jenis Pembayaran</label>
                    <select class="form-select" id="paymentOp" name="paymentOp"  value="{{ old('paymentOp')}}">
                        <option selected>Pilih jenis pembayaran</option>
                        @foreach ( $payments as $pay )
                        <option>{{ $pay->pembayaran_op }}</option>
                        @endforeach
                    </select>
                    @error('paymentOp')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="row gy-3">
                    <div class="col-md-6">
                        <label for="sender" class="form-label">Nama pengirim</label>
                        <input type="text" class="form-control" id="sender" placeholder="Nama pengirim" name="sender" value="{{ old('sender')}}" required>
                        <small class="text-muted">Apabila memilih bayar di tempat, isi dengan "-"</small>
                        @error('sender')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                            <label for="rekening" class="form-label">No Rekening</label>
                            <input type="text" class="form-control" id="rekening" placeholder="No Rekening" name="rekening" value="{{ old('rekening') }}" required>
                            <small class="text-muted">Apabila memilih bayar di tempat, isi dengan "-"</small>
                            @error('rekening')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                    </div>

                    <div class="col-md-12">
                            <label for="payment" class="form-label">Total pembayaran</label>
                            <input type="text" class="form-control" id="payment" placeholder="Total Pembayaran" name="payment" value="{{ old('payment') }}" required>
                            <!-- <small class="text-muted">Apabila memilih bayar di tempat, isi dengan "-"</small> -->
                            @error('payment')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                    </div>
                </div>

                <hr class="my-4">
                <button class="btn btn-lg" type="submit" style="background-color:#ffcb8e; color:#f5efef;">Pesan</button>
            </form>
        </div>
    </main>
</div>
@endsection