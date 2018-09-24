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

    protected $fillable = [
            'name', 'price', 'number_of_owners', 'car_location',
            'exterior_color', 'interior_color', 'car_transmission',
            'is_auto', 'drive', 'horse_power', 'torque', 'id_brand',
            'id_model', 'year', 'fuel_type', 'un_repaired_problems',
            'description', 'more_details', 'is_used', 'front_lights',
            'front_bumpers', 'bonnet', 'wind_screen', 'rear_lights',
            'rear_bumpers', 'tailgate', 'door_mirrors', 'carpets',
            'stereo_navigate_etc', 'style'];



    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function exterior_color()
    {
        return $this->belongsTo(Color::class, "exterior_color_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function interior_color()
    {
        return $this->belongsTo(Color::class, "interior_color_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function brand()
    {
        return $this->belongsTo(CarBrand::class, "brand_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function model()
    {
        return $this->belongsTo(CarModel::class, "model_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function fuel_type()
    {
        return $this->belongsTo(CarFuelType::class, "fuel_type_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function front_lights_status()
    {
        return $this->belongsTo(CarStatus::class, "front_lights_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function front_bumpers_status()
    {
        return $this->belongsTo(CarStatus::class, "front_bumpers_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function bonnet_status()
    {
        return $this->belongsTo(CarStatus::class, "bonnet_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function wind_screen_status()
    {
        return $this->belongsTo(CarStatus::class, "wind_screen_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function rear_lights_status()
    {
        return $this->belongsTo(CarStatus::class, "rear_lights_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function rear_bumpers_status()
    {
        return $this->belongsTo(CarStatus::class, "rear_bumpers_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function tailgate_status()
    {
        return $this->belongsTo(CarStatus::class, "tailgate_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function door_mirrors_status()
    {
        return $this->belongsTo(CarStatus::class, "door_mirrors_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function carpets_status()
    {
        return $this->belongsTo(CarStatus::class, "carpets_id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function stereo_navigate_etc_status()
    {
        return $this->belongsTo(CarStatus::class, "stereo_navigate_etc_id");//->get(['status_name']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function car_style()
    {
        return $this->belongsTo(CarStyle::class, "style_id");
    }

}
