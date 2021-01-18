<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = service::all();
        // $services->dd();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jenis_paket' => 'required',
            'durasi_latihan' => 'required',
            'pelajar_dan_mahasiswa' => 'required',
            'umum' => 'required',
        ]);

        $service = new service;
        $service->jenis_paket = $request->jenis_paket;
        $service->durasi_latihan = $request->durasi_latihan;
        $service->pelajar_dan_mahasiswa = $request->pelajar_dan_mahasiswa;
        $service->umum = $request->umum;

        $service->save();

        return redirect('/services')->with('status', 'Service has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        return view('services.index', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        $request->validate([
            'jenis_paket' => 'required',
            'durasi_latihan' => 'required',
            'pelajar_dan_mahasiswa' => 'required',
            'umum' => 'required',
        ]);

        service::where('id', $service->id)
                ->update([
                    'jenis_paket' => $request->jenis_paket,
                    'durasi_latihan' => $request->durasi_latihan,
                    'pelajar_dan_mahasiswa' => $request->pelajar_dan_mahasiswa,
                    'umum' => $request->umum,
                ]);
                
        return redirect('/services')->with('status', 'Service has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        service::destroy($service->id);
        return redirect('/services')->with('status', 'Service has been deleted!');
    }
}
