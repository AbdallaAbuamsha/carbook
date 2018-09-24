<?php

namespace App\Http\Controllers;

use App\CarBrand;
use App\CarModel;
use App\Http\Resources\ModelResource;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    //
    public function index()
    {
        return ModelResource::collection(CarModel::all());
    }
    public function show($id)
    {
        return new ModelResource(CarBrand::where('id', '=', $id)->get()->first()->models);
    }
}
