@extends('dashboard.admin')

@section('title', 'ARMADA')
@section('subjudul', 'Daftar Pemesanan')
@section('slidekanan', 'Pemesanan')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-15">
                <!-- <h1 class="mt-3">Paket List</h1> -->
                <!-- <a href="/services/create" class="btn btn-primary my-3">Add Paket</a> -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table table-sm table-dark">
                    <div class="table-responsive">
                        <table class="table align-middle">
                        <thead>
                            <tr>
                                <td class="align-middle">Nama</td>
                                <td class="align-middle">Alamat</td>
                                <td class="align-middle">Jenis Paket</td>
                                <td class="align-middle">Jenis Pembayaran</td>
                                <td class="align-middle">Nama Pengirim</td>
                                <td class="align-middle">Nomor Rekening</td>
                                <td class="align-middle">Total Pembayaran</td>
                                <!-- <td class="align-middle">Status</td> -->
                                <td class="align-middle">Aksi</td>
                            </tr>
                        </thead>
                        @foreach ( $orders as $order )
                        <tbody> 
                            <tr>
                                <td class="align-middle">{{ $order->nama }}</td>
                                <td class="align-middle">{{ $order->alamat }}</td>
                                <td class="align-middle">{{ $order->paket_kursus }}</td>
                                <td class="align-middle">{{ $order->Pembayaran_op }}</td>
                                <td class="align-middle">{{ $order->pengirim }}</td>
                                <td class="align-middle">{{ $order->no_rekening }}</td>
                                <td class="align-middle">{{ $order->total_pembayaran }}</td>
                                <td class="align-middle">
                                    <a href=" " class="btn btn-primary d-inline">Verif</a>
                                    <form action="/orders/{{ $order->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </table>
            </div>
        </div>
    </div>
@endsection
