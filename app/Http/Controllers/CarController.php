<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CarController extends Controller
{
    public function index(): View
    {
        $cars = Car::all();
        $data = [
            'cars' => $cars
        ];
        return view('car.index', $data);
    }
    public function deleteData($id)
    {
        $cars = Car::find($id);
        $cars->delete();
        return redirect()->to('/');
    }
    public function create()
    {
        return view('car.create');
    }
    public function store(Request $request)
    {
        // $validate = $request->validate([
        //     'nopol' => 'required', 'unique:cars,nopol',
        //     'color' => 'required',
        //     'pemilik' => 'required',
        //     'stok' => 'required', 'numeric'
        // ]);
        // Car::create([
        //     'nopol' => $validate['nopol'],
        //     'color' => $validate['color'],
        //     'pemilik' => $validate['pemilik'],
        //     'stok' => $validate['stok']

        // ]);
        //clean code:
        $request->validate([
            "nopol" => ['required', 'unique:cars,nopol'],
            "pemilik" => ['required'],
            "color" => ['required'],
            "stok" => ['required', 'numeric']
        ]);

        Car::create($request->all());
        return redirect()->to('/');
    }
    public function edit($id)
    {
        $cars = Car::find($id);
        $data = [
            'cars' => $cars
        ];
        return view('car.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        // $request->validate([
        //     "nopol" => ['required', 'unique:cars,nopol'],
        //     "pemilik" => ['required'],
        //     "color" => ['required'],
        //     "stok" => ['required', 'numeric']
        // ]);

        // $car->update([
        //     'nopol' => $request->nopol,
        //     'color' => $request->color,
        //     'pemilik' => $request->pemilik,
        //     'stok' => $request->stok
        // ]);
        // clean code:
        $car->update($request->all());
        return redirect()->to('/');
    }
}
