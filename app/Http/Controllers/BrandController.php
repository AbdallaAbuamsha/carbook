<?php

namespace App\Http\Controllers;

use App\CarBrand;
use App\Http\Resources\BrandResource;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function index()
    {
        //
        return BrandResource::collection(CarBrand::all());
    }

}
