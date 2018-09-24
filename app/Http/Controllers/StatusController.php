<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\StatusResource;
use App\CarStatus;
class StatusController extends Controller
{
    //
    public function index()
    {
        //
        return StatusResource::collection(CarStatus::all());
    }
}
