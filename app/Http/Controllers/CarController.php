<?php

namespace App\Http\Controllers;

use App\Http\Resources\Car\CarResource;
use App\Model\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CarResource::collection(Car::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $car = new Car();
        $car->name = $request->name;
        $car->price = $request->price;
        $car->number_of_owners = $request->number_of_owners;
        $car->car_location = $request->car_location;
        $car->exterior_color_id = $request->exterior_color_id;
        $car->interior_color_id = $request->interior_color_id;
        $car->car_transmission = $request->car_transmission;
        $car->is_auto = $request->is_auto;
        $car->drive = $request->drive;
        $car->horse_power = $request->horse_power;
        $car->torque = $request->torque;
        $car->brand_id = $request->brand_id;
        $car->model_id = $request->model_id;
        $car->year = $request->year;
        $car->fuel_type_id = $request->fuel_type_id;
        $car->un_repaired_problems = $request->un_repaired_problems;
        $car->description = $request->description;
        $car->more_details = $request->more_details;
        $car->is_used = $request->is_used;
        $car->front_lights_id = $request->front_lights_id;
        $car->front_bumpers_id = $request->front_bumpers_id;
        $car->bonnet_id = $request->bonnet_id;
        $car->wind_screen_id = $request->wind_screen_id;
        $car->rear_lights_id = $request->rear_lights_id;
        $car->rear_bumpers_id = $request->rear_bumpers_id;
        $car->tailgate_id = $request->tailgate_id;
        $car->door_mirrors_id = $request->door_mirrors_id;
        $car->carpets_id = $request->carpets_id;
        $car->stereo_navigate_etc_id = $request->stereo_navigate_etc_id;
        $car->style_id = $request->style_id;
        $car->user_id = 1;
        $car->save();
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //

        return $car;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
