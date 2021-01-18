@extends('dashboard.admin')

@section('title', 'ARMADA')
@section('subjudul', 'Daftar Paket')
@section('slidekanan', 'Catalog Kursus')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <h1 class="mt-3">Paket List</h1> -->
                <a href="/services/create" class="btn btn-primary my-3">Add Paket</a>
                
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
                                <td class="align-middle">Jenis Paket</td>
                                <td class="align-middle">Durasi Latihan</td>
                                <td class="align-middle">Biaya Paket</td>
                                <td class="align-middle">Bonus</td>
                                <td class="align-middle">Keterangan</td>
                            </tr>
                        </thead>
                        @foreach ( $services as $srv )
                        <tbody> 
                            <tr>
                                <td class="align-middle">{{ $srv->jenis_paket }}</td>
                                <td class="align-middle">{{ $srv->durasi_latihan }}</td>
                                <td class="align-middle">{{ $srv->pelajar_dan_mahasiswa }}</td>
                                <td class="align-middle">{{ $srv->umum }}</td>
                                <td class="align-middle">
                                    <a href="/services/{{ $srv->id }}/edit" class="btn btn-primary d-inline">Edit</a>
                                    <form action="/services/{{ $srv->id }}" method="POST" class="d-inline">
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
