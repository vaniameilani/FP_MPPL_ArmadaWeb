@extends('dashboard.admin')

@section('title', 'ARMADA')
@section('subjudul', 'Daftar Mobil')
@section('slidekanan', 'Mobil')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7 mb-3">
                <!-- <h1 class="mt-3">Cars List</h1> -->

                <a href="/cars/create" class="btn btn-primary my-3">Add Car</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach ($cars as $cr) 
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $cr->merk_mobil}} 
                        <a href="/cars/{{ $cr->id }}" class="badge bg-primary rounded-pill">Detail</a>
                    </li>
                    @endforeach
                </ul>

                <!-- <table class="table table-sm table-dark">
                    <div class="table-responsive">
                        <table class="table align-middle">
                        <thead>
                            <tr>
                                <td class="align-middle">Nama Mobil</td>
                                <td class="align-middle">Warna Mobil</td>
                                <td class="align-middle">Nomor Plat</td>
                                <td class="align-middle">Keterangan</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $cars as $cr ) 
                            <tr>
                                <td class="align-middle">{{ $cr->nama_mobil }}</td>
                                <td class="align-middle">{{ $cr->warna }}</td>
                                <td class="align-middle">{{ $cr->plat_mobil }}</td>
                                <td class="align-middle">
                                    <a href="" type="button" class="btn btn-outline-success">edit</a>
                                    <a href="" type="button" class="btn btn-outline-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </table> -->
            </div>
        </div>
    </div>
@endsection
