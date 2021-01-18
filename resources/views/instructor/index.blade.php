@extends('dashboard.admin')

@section('title', 'ARMADA')
@section('subjudul', 'Daftar Instruktur')
@section('slidekanan', 'Instruktur')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-7 mb-3 mt-3">
                <!-- <h1 class="mt-3">Cars List</h1> -->

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach ($instructors as $inst) 
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $inst->name }} 
                        <a href="/admin/instructors/detail" class="badge bg-primary rounded-pill">Detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
