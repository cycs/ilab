<?php

use App\Soil;
use App\Seed;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('qrlogin', ['uses' => 'QrLoginController@index']);
Route::post('qrLogin', ['uses' => 'QrLoginController@checkUser']);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {
    return view('edenia');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/app', 'HomeController@index')->name('home');

Route::get('/app/plantation', function () {
    return view('plantation')->with('seeds', Seed::all());
})->name('plantation');

Route::get('/app/tuto', function () {
    return view('tuto')->with('seeds', Seed::all());
})->name('tuto');

Route::get('/meteo', function () {
    return view('meteo');
})->name('meteo');

Route::get('/app/info', function () {
    return view('info')->with('seeds', Seed::all());
})->name('info');

Route::get('/app/maladie', function () {
    return view('maladie')->with('seeds', Seed::all());
})->name('maladie');

Route::get('/app/maladieInfo', function () {
    return view('maladieInfo')->with('seeds', Seed::all());
})->name('maladieInfo');

Route::get('/app/chart', function () {
    return view('chart')->with('seeds', Seed::all());
})->name('chart');

Route::get('app/info/seed/{id}', function ($id) {
    setlocale(LC_TIME, 'french');
    setlocale(LC_ALL, 'fr_FR.UTF-8');

    $seed = Seed::find($id);

//    Carbon::setUtf8(true);

    $plant_start = Carbon::parse($seed->planting_period_start, 'UTC')->localeMonth;
    $plant_end = Carbon::parse($seed->planting_period_end, 'UTC')->localeMonth;
    $harvest_start = Carbon::parse($seed->harvest_period_start, 'UTC')->localeMonth;
    $harvest_end = Carbon::parse($seed->harvest_period_end, 'UTC')->localeMonth;

    $data = array(
        'seed' => $seed,
        'start_plant' => $plant_start,
        'end_plant' => $plant_end,
        'start_harvest' =>  $harvest_start,
        'end_harvest' => $harvest_end
    );

    return view('info')->with($data);

})->where('id', '[0-9]+')->name('info');

Route::get('/app/tuyaux', function () {
    return view('tuyaux');
})->name('tuyaux');

Route::get('eloquent', function() {

    return View::make('eloquent')
        ->with('seeds', Seed::all());

});

Route::get('/site', function() {

    return View::make('site')
        ->with('soils', Soil::all());

});

Route::get('/app/seeds', 'SeedsController@index')->name('seeds');




