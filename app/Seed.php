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
        'grown_img_url',
        'seed_img_url',
        'price',
        'difficulty',
        'tutorial',
        'advices',
        'soil_ph',
        'soil_humus_percent',
        'soil_granulometry'
    ];

    public function illnesses(){
        return $this->belongsToMany('App\Illness', 'seeds_illnesses', 'seed_id', 'illness_id');
    }
}
