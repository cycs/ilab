<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model {
    protected $fillable = ['name'];

    public function parcels(){
        return $this->belongsToMany('App\Seed', 'seeds_parcels', 'parcel_id', 'seed_id');
    }
}

