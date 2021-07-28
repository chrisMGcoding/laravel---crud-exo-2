<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index() {
        $dataCars = Car::all();
        return view('pages.home', compact('dataCars'));
    }

    public function create() {
        return view('pages.carsCreate');
    }

    public function store(Request $request) {
        $newEntry = new Car;

        $newEntry->brand = $request->brand;
        $newEntry->year = $request->year;
        $newEntry->color = $request->color;
        $newEntry->price = $request->price;
        $newEntry->discount = $request->discount;

        $newEntry->save();
        return redirect()->back();
    }
}
