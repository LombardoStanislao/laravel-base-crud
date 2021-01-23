<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();

        $data = [
          'cars' => $cars,
        ];
        return view('cars.index', $data);
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
        $data = $request->all();

        $newCar = new Car;
        $newCar->casa_produttrice = $data['casa_produttrice'];
        $newCar->modello = $data['modello'];
        $newCar->anno = $data['anno'];
        $newCar->cilindrata = $data['cilindrata'];
        $newCar->prezzo = $data['prezzo'];
        $newCar->save();

        return redirect()->route('cars.show', $newCar->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $car = Car::find($id);

      if ($car) {
        $data = [
          'car' => $car
        ];
          return view('cars.show', $data);
      }
      abort(404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
      if ($car) {
          return view('cars.edit', compact('car'));
      }
      abort(404);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $data = $request->all();
        $car->update($data);
        return redirect()->route('cars.show', $car->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('cars.index');
    }
}
