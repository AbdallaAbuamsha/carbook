<?php

namespace App\Http\Resources\Car;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'number_of_owners' => $this->number_of_owners,
            'car_location' => $this->car_location,
            'exterior_color' => $this->exterior_color,
            'interior_color' => $this->interior_color,
            'car_transmission' => $this->car_transmission,
            'is_auto' => $this->is_auto,
            'drive' => $this->drive,
            'horse_power' => $this->horse_power,
            'torque' => $this->torque,
            'brand' => $this->brand,
            'model' => $this->model,
            'year' => $this->year,
            'fuel_type' => $this->fuel_type,
            'un_repaired_problems' => $this->un_repaired_problems,
            'description' => $this->description,
            'more_details' => $this->more_details,
            'is_used' => $this->is_used,
            'front_lights' => $this->front_lights_status,
            'front_bumpers' => $this->front_bumpers_status,
            'bonnet' => $this->bonnet_status,
            'wind_screen' => $this->wind_screen_status,
            'rear_lights' => $this->rear_lights_status,
            'rear_bumpers' => $this->rear_bumpers_status,
            'tailgate' => $this->tailgate_status,
            'door_mirrors' => $this->door_mirrors_status,
            'carpets' => $this->carpets_status,
            'stereo_navigate_etc' => $this->stereo_navigate_etc_status,
            'style' => $this->style,
        ];
    }
}
