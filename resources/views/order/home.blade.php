@extends('layouts.order')

@section('title', 'customer/pendaftaran')
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
        <p class="lead fw-normal fs-6">Kursus mengemudi dengan biaya paling terjangkau, dengan tetap mengutamakan kualitas.  "Kepercayaan anda adalah amanah bagi kami" </p>
      </div>
    </div>  

      <div class="table-responsive">
            <table class="table align-middle table-bordered">
            <thead class="fw-bolder" style="background-color: #ffcb8e; color: #f5efef;">
                <tr>
                    <td class="align-middle">Jenis Paket</td>
                    <td class="align-middle">Durasi Latihan</td>
                    <td class="align-middle">Biaya Paket</td>
                    <td class="align-middle">Bonus</td>
                </tr>
            </thead>
            @foreach ( $services as $svc )
            <tbody> 
                <tr>
                    <td class="align-middle">{{ $svc->jenis_paket }}</td>
                    <td class="align-middle">{{ $svc->durasi_latihan }}</td>
                    <td class="align-middle">{{ $svc->pelajar_dan_mahasiswa }}</td>
                    <td class="align-middle">{{ $svc->umum }}</td>
                </tr>
            @endforeach
            </tbody>
            </table>
      </div>
  </section>
</main>
@endsection
