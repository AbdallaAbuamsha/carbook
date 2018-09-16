<?php

namespace App\Model;

use App\CarBrand;
use App\CarFuelType;
use App\CarModel;
use App\CarStatus;
use App\CarStyle;
use App\Color;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function exterior_color()
    {
        return $this->belongsTo(Color::class);
    }
    function interior_color()
    {
        return $this->belongsTo(Color::class);
    }
    function brand()
    {
        return $this->belongsTo(CarBrand::class);
    }
    function model()
    {
        return $this->belongsTo(CarModel::class);
    }
    function fuel_type()
    {
        return $this->belongsTo(CarFuelType::class);
    }
    function front_lights_status()
    {
        return $this->belongsTo(CarStatus::class);
    }
    function front_bumpers_status()
    {
        return $this->belongsTo(CarStatus::class);
    }
    function bonnet_status()
    {
        return $this->belongsTo(CarStatus::class);
    }
    function wind_screen_status()
    {
        return $this->belongsTo(CarStatus::class);
    }
    function rear_lights_status()
    {
        return $this->belongsTo(CarStatus::class);
    }
    function rear_bumpers_status()
    {
        return $this->belongsTo(CarStatus::class);
    }
    function tailgate_status()
    {
        return $this->belongsTo(CarStatus::class);
    }
    function door_mirrors_status()
    {
        return $this->belongsTo(CarStatus::class);
    }
    function carpets_status()
    {
        return $this->belongsTo(CarStatus::class);
    }
    function stereo_navigate_etc_status()
    {
        return $this->belongsTo(CarStatus::class);
    }
    function CarStyle()
    {
        return $this->belongsTo(CarStyle::class);
    }

}
