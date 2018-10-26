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

        Soil::create([
            'name' => 'Edenia Liège',
            'address' => 'Boulevard de la constitution',
            'lat' => '50.644344',
            'long' => '5.590020',
            'ph' => 6,
            'humus_percent' => 15,
            'granulometry' => 'sables fins'
        ]);

        Soil::create([
            'name' => 'Edenia Marche-en-Famenne',
            'address' => 'Chaussée de l\'ourthe',
            'lat' => '50.234227',
            'long' => '5.356592',
            'ph' => 8,
            'humus_percent' => 16,
            'granulometry' => 'calcaire'
        ]);

        Soil::create([
            'name' => 'Edenia Bastogne',
            'address' => 'Rue de la Wachenaule',
            'lat' => '49.992863',
            'long' => '5.711379',
            'ph' => 7,
            'humus_percent' => 17,
            'granulometry' => 'humifère'
        ]);

        Soil::create([
            'name' => 'Edenia Charleroi',
            'address' => 'Rue Motte',
            'lat' => '50.426939',
            'long' => '4.459244',
            'ph' => 7.8,
            'humus_percent' => 18,
            'granulometry' => 'argile'
        ]);

        Soil::create([
            'name' => 'Edenia Gent',
            'address' => 'Gustaaf Callierlaan',
            'lat' => '51.042883',
            'long' => '3.733208',
            'ph' => 6.8,
            'humus_percent' => 20,
            'granulometry' => 'limons fins'
        ]);

        Soil::create([
            'name' => 'Edenia Louvain',
            'address' => 'Genadeweg',
            'lat' => '50.901131',
            'long' => '4.727402',
            'ph' => 6.2,
            'humus_percent' => 19,
            'granulometry' => 'sables grossiers'
        ]);

        Soil::create([
            'name' => 'Edenia Nivelles',
            'address' => 'Chemin de la paix',
            'lat' => '50.592503',
            'long' => '4.331029',
            'ph' => 7.3,
            'humus_percent' => 10,
            'granulometry' => 'calcaire'
        ]);

    }
}
