<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soil extends Model {
    protected $fillable = ['name', 'address', 'lat', 'long', 'granulometry', 'ph', 'humus_percent'];

    public function parcels(){
        return $this->belongsToMany('App\Parcel', 'soils_parcels', 'soil_id', 'parcel_id');
    }
}


