@extends('layouts.customer')

@section('title', 'Dashboard')
@section('container')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in <strong>USERS</strong>!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<main>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-3 mx-auto">
        <h1 class="fw-light fw-bold" style="color: #931a25;">Kursus Mengemudi "ARMADA"</h1>
        <p class="lead fw-normal fs-4"> Selamat Datang di Kursus Armada ! </p>
      </div>
    </div>  

    <hr style="width:90%; margin-left:97px">

    <table class="table table-dark table-striped">
        <h3 class="mb-4 fw-bolder" id="schedule">Jadwal Latihan</h3>
        <div class="table-responsive">
            <table class="table align-middle">
            <thead>
                <tr>
                    <td class="align-middle">Nomor</td>
                    <td class="align-middle">Hari dan Tanggal</td>
                    <td class="align-middle">Waktu</td>
                </tr>
            </thead>
            <tbody> 
                <tr>
                  <td class="align-middle">1</td>
                  <td class="align-middle">1</td>
                  <td class="align-middle">1</td>
                </tr>
            </tbody>
            </table>
        </div>
    </table>
</section>

<hr style="width:90%; margin-left:97px">

<h3 class="mt-5 mb-3 fw-bolder container" id="evaluasi">Evaluasi</h3>
<div class="text-center container">
    <div class="">
        <table class="table table-bordered">
        <thead>
            <tr>
                <td class="align-middle" width="200px" height="50px">Menyalakan mesin</td>
                <td class="align-middle"> yay </td>
            </tr>
        </thead>
        <thead>
            <tr>
                <td class="align-middle" width="200px" height="50px">Perpindahan gigi</td>
                <td class="align-middle"></td>
            </tr>
        </thead>
        <thead>
            <tr>
                <td class="align-middle" width="200px" height="50px">Menginjak rem</td>
                <td class="align-middle"></td>
            </tr>
        </thead>
        <thead>
            <tr>
                <td class="align-middle" width="200px" height="50px">Haluan</td>
                <td class="align-middle"></td>
            </tr>
        </thead>
        <thead>
            <tr>
                <td class="align-middle" width="200px" height="50px">Parkir</td>
                <td class="align-middle"></td>
            </tr>
        </thead>
        <thead>
            <tr>
                <td class="align-middle" width="200px" height="50px">Nilai akhir</td>
                <td class="align-middle"></td>
            </tr>
        </thead>
        </table>
    </div>
</div>
  
  <!-- order -->
  <!-- <div class="py-5 text-center container" id="order">
  <h3 class="mb-4 fw-bolder">ORDER HERE</h3>
    <div class="form-floating mb-3 mt-7">
      <input type="nama" class="form-control" id="nama" placeholder="Nama">
      <label for="floatingInput">Nama</label>
    </div>
    <div class="form-floating mb-3">
      <input type="paket" class="form-control" id="paket" placeholder="jenis catalog">
      <label for="floatingInput">Jenis Catalog</label>
    </div>
    <div class="form-floating mb-3">
      <input type="harga" class="form-control" id="harga" placeholder="">
      <label for="floatingPassword">Total Pembayaran</label>
    </div>
    <button type="submit" class="btn btn-outline-dark float-right">Order</button>
  </div> -->

</main>
@endsection
