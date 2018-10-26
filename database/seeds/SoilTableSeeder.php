<?php

use Illuminate\Database\Seeder;
use App\Seed;
use App\Illness;
use App\Soil;

class SoilTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soils')->delete();

        Soil::create([
            'name' => 'Edenia Namur',
            'address' => 'Avenue du Bon Air',
            'lat' => '50.478047',
            'long' => '4.857017',
            'ph' => 7,
            'humus_percent' => 5,
            'granulometry' => 'limons fins'
        ]);

    }
}
