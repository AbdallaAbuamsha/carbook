<?php

namespace App\Http\Controllers;

use App\CarStyle;
use App\Http\Resources\CarStyleResource;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    //
    public function index()
    {
        return CarStyleResource::collection(CarStyle::all());
    }
}
