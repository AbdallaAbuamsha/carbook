<?php

namespace App\Http\Controllers;

use App\CarFuelType;
use App\Http\Resources\FuelTypeResource;
use Illuminate\Http\Request;

class FuelTypeController extends Controller
{
    //

    public function index()
    {
        return FuelTypeResource::collection(CarFuelType::all());
    }
}
