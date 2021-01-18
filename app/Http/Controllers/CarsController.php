<?php

namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;

class CarsController extends Controller
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
        $cars = car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
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
            'merk_mobil' => 'required',
            'no_polisi' => 'required',
            'jenis_mesin' => 'required',
            'warna_mobil' => 'required',
            'tahun_mesin' => 'required',
        ]);

        $car = new Car;
        $car->merk_mobil = $request->merk_mobil;
        $car->no_polisi = $request->no_polisi;
        $car->jenis_mesin = $request->jenis_mesin;
        $car->warna_mobil = $request->warna_mobil;
        $car->tahun_mesin = $request->tahun_mesin;

        $car->save();

        return redirect('/cars')->with('status', 'Car has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\car  $cars
     * @return \Illuminate\Http\Response
     */
    public function show(car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\car  $cars
     * @return \Illuminate\Http\Response
     */
    public function edit(car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\car  $cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, car $car)
    {
        $request->validate([
            'merk_mobil' => 'required',
            'no_polisi' => 'required',
            'jenis_mesin' => 'required',
            'warna_mobil' => 'required',
            'tahun_mesin' => 'required',
        ]);

        Car::where('id', $car->id)
            ->update([
                'merk_mobil' => $request->merk_mobil,
                'no_polisi' => $request->no_polisi,
                'jenis_mesin' => $request->jenis_mesin,
                'warna_mobil' => $request->warna_mobil,
                'tahun_mesin' => $request->tahun_mesin,
            ]);
            return redirect('/cars')->with('status', 'Car has been Edited!');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\car  $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy(car $car)
    {
        Car::destroy($car->id);
        return redirect('/cars')->with('status', 'Car has been deleted!');
    }
}
