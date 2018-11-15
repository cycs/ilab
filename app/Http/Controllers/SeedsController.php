<?php

namespace App\Http\Controllers;

use App\Seed;
use Illuminate\Http\Request;

class SeedsController extends Controller
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
        return view('seeds')->with('seeds', Seed::all());
    }

    public function postData(){

    }

}
