<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illness extends Model {
    protected $fillable = [
        'name',
        'description',
        'cause',
        'consequence',
        'prevention',
        'treatment'
    ];
}
