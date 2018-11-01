<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model {
    protected $fillable = [
        'name',
        'latin_name',
        'variety',
        'type',
        'exposure',
        'water',
        'fertilizer',
        'planting_period',
        'harvest_period',
        'harvest_within_time',
        'grown_img_url',
        'seed_img_url',
        'price',
        'difficulty',
        'soil_ph',
        'soil_humus_percent',
        'soil_granulometry'
    ];

    public function illnesses(){
        return $this->belongsToMany('App\Illness', 'seeds_illnesses', 'seed_id', 'illness_id');
    }

    public function permacultures(){
        return $this->belongsToMany('App\Seed', 'seeds_permacultures', 'seed_planted_id', 'seed_to_plant_id');
    }

    public function positive_permaculture(){
//        return $this->where('positive_effect', true);
    }

    public function negative_permaculture(){
  //      return $this->where('positive_effect', false);
    }
}
