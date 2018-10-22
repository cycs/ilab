<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picnic extends Model {
    protected $fillable = ['name', 'taste_level'];

    public function bears(){
        return $this->belongsToMany('App\Bear', 'bears_picnics', 'picnic_id', 'bear_id');
    }
}