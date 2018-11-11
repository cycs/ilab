<?php

use Illuminate\Database\Seeder;
use App\Seed;
use App\Parcel;
use App\Illness;
use App\Soil;

class ParcelTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parcels')->delete();

        $a1 = Parcel::create([
            'name' => 'a1',
        ]);

        $a2 = Parcel::create([
            'name' => 'a2',
        ]);


        $a3 = Parcel::create([
            'name' => 'a3',
        ]);

        $b1 = Parcel::create([
            'name' => 'b1',
        ]);

        $b2 = Parcel::create([
            'name' => 'b2',
        ]);

        $b3 = Parcel::create([
            'name' => 'b3',
        ]);

        $c1 = Parcel::create([
            'name' => 'c1',
        ]);

        $c2 = Parcel::create([
            'name' => 'c2',
        ]);

        $c3 = Parcel::create([
            'name' => 'c3',
        ]);

        $tomate = Seed::find(1);
        $fraise = Seed::find(9);
        $carotte = Seed::find(13);
        $framboise = Seed::find(16);
        $cassis = Seed::find(17);
        $ciboulette = Seed::find(20);
        $potimarron = Seed::find(22);
        $epinard = Seed::find(12);

        $tomate->parcel_seeded()->attach($a1);
        $fraise->parcel_seeded()->attach($a2);
        $carotte->parcel_seeded()->attach($a3);
        $framboise->parcel_seeded()->attach($b1);
        $cassis->parcel_seeded()->attach($b2);
        $ciboulette->parcel_seeded()->attach($b3);
        $potimarron->parcel_seeded()->attach($c2);
        $epinard->parcel_seeded()->attach($c3);
    }
}
