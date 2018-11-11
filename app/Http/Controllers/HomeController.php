<?php

namespace App\Http\Controllers;

use App\Parcel;
use App\Soil;
use Illuminate\Http\Request;
use App\Seed;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')
            ->with('seeds', Seed::all())
            ->with('parcels', Parcel::all());
    }
}
