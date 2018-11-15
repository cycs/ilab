<?php

namespace App\Http\Controllers;

use App\Seed;
use App\Parcel;
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

    public function store(Request $request){
        $c1 = Parcel::create([
            'name' => 'c1',
        ]);

        $seed = Seed::find($request->input('seedId'));
        $seed->parcel_seeded()->attach($c1);
        $seed->save();

        return redirect('app');
    }

}
