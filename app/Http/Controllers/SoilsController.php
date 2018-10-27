<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Soil;

class SoilsController extends Controller
{
    public function getAll()
    {
        return Soil::all();
    }
}
