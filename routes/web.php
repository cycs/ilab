<?php

use App\Soil;
use App\Seed;

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
    return view('plantation');
})->name('plantation');

Route::get('eloquent', function() {

    return View::make('eloquent')
        ->with('seeds', Seed::all());

});

Route::get('/site', function() {

    return View::make('site')
        ->with('soils', Soil::all());

});

Route::get('/app/seeds', 'SeedsController@index')->name('seeds');




