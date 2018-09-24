<?php

namespace App\Http\Controllers;

use App\Color;
use App\Http\Resources\ColorResource;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    //
    public function index()
    {
        //
        return ColorResource::collection(Color::all());
    }
}
