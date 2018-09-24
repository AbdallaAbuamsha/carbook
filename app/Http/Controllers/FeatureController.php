<?php

namespace App\Http\Controllers;

use App\CarFeature;
use App\Http\Resources\carFeatureResource;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    //
    public function index()
    {
        //
        return CarFeatureResource::collection(CarFeature::all());
    }
}
