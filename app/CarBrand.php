<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    //
    function models()
    {
        return $this->hasMany(CarModel::class, "brand_id");
    }
}
