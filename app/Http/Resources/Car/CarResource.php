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
            'brand' => $this->brand->brand_name,
            'model' => $this->model->model_name,
            'year' => $this->year,
            'fuel_type' => ($this->fuel_type == null)? null:$this->fuel_type->fuel_type_name,
            'un_repaired_problems' => $this->un_repaired_problems,
            'description' => $this->description,
            'more_details' => $this->more_details,
            'is_used' => $this->is_used,
            'front_lights' => ($this->front_lights_status == null)? null: $this->front_lights_status->status_name,
            'front_bumpers' =>  ($this->front_bumpers_status == null)? null : $this->front_bumpers_status->status_name,
            'bonnet' =>  ($this->bonnet_status == null)? null : $this->bonnet_status->status_name,
            'wind_screen' =>  ($this->wind_screen_status == null)? null : $this->wind_screen_status->status_name,
            'rear_lights' =>  ($this->rear_lights_status == null)? null : $this->rear_lights_status->status_name,
            'rear_bumpers' =>  ($this->rear_bumpers_status == null)? null : $this->rear_bumpers_status->status_name,
            'tailgate' =>  ($this->tailgate_status == null)? null : $this->tailgate_status->status_name,
            'door_mirrors' =>  ($this->door_mirrors_status == null)? null : $this->door_mirrors_status->status_name,
            'carpets' =>  ($this->carpets_status == null)? null : $this->carpets_status->status_name,
            'stereo_navigate_etc' =>  ($this->stereo_navigate_etc_status == null)? null : $this->stereo_navigate_etc_status->status_name,
            'style' =>  ($this->car_style == null)? null : $this->car_style->car_style_name,
        ];
    }
}
