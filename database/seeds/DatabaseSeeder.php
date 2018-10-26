<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\UserTableSeeder;
use Illuminate\Database\SeedTableSeeder;
use Illuminate\Database\IllnessTableSeeder;
use Illuminate\Database\SoilTableSeeder;
use App\Bear;
use App\Fish;
use App\Tree;
use App\Picnic;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        //$this->call('BearAppSeeder');
        //$this->command->info('Bear app seed finished');
        $this->call('UserTableSeeder');
        $this->command->info('User app seed finished');
        $this->call('SeedTableSeeder');
        $this->command->info('Seed app seed finished');
        $this->call('IllnessTableSeeder');
        $this->command->info('Illness app seed finished');
        $this->call('SoilTableSeeder');
        $this->command->info('Soil app seed finished');
        // $this->call(UsersTableSeeder::class);
    }
}

class BearAppSeeder extends Seeder {
    public function run(){

        // clear our database
        DB::table('bears')->delete();
        DB::table('fish')->delete();
        DB::table('trees')->delete();
        DB::table('picnics')->delete();
        DB::table('bears_picnics')->delete();


        //seed our bears table
        // 3 different bears
/*
        $bearLawly = Bear::create([
            'name' => 'Lawly',
            'type' => 'Grizzly',
            'danger_level' => 8
        ]);

        $bearCerms = Bear::create([
            'name' => 'Cerms',
            'type' => 'Black',
            'danger_level' => 4
        ]);

        $bearAbodot = Bear::create([
            'name' => 'Abodot',
            'type' => 'Polar',
            'danger_level' => 3
        ]);

        $this->command->info('The bears are alive !');

        // creating the fishes (no name for them)
        Fish::create([
            'weight' => 5,
            'bear_id' => $bearLawly->id
        ]);

        Fish::create([
            'weight' => 12,
            'bear_id' => $bearCerms->id
        ]);

        Fish::create([
            'weight' => 4,
            'bear_id' => $bearAbodot->id
        ]);

        $this->command->info('They are eating fish');

        // seeding our trees table
        Tree::create([
            'type' => 'Redwood',
            'age' => 500,
            'bear_id' => $bearLawly->id
        ]);
        Tree::create([
            'type' => 'Oak',
            'age' => 400,
            'bear_id' => $bearLawly->id
        ]);

        $this->command->info('Climb bears! Be free!');

        // seed our picnic table
        // one picnic and apply all bear to this one picnic
        $picnicYellowstone = Picnic::create([
            'name' => 'Yellowstone',
            'taste_level' => 6
        ]);

        $picnicGrandCanyon = Picnic::create([
            'name' => 'Grand Canyon',
            'taste_level' => 5
        ]);

        $this->command->info('Yummy picnics');


        // link our bears to picnics
        $bearLawly->picnics()->attach($picnicYellowstone);
        $bearLawly->picnics()->attach($picnicGrandCanyon);

        $bearCerms->picnics()->attach($picnicYellowstone);
        $bearCerms->picnics()->attach($picnicGrandCanyon);

        $bearAbodot->picnics()->attach($picnicYellowstone);
        $bearAbodot->picnics()->attach($picnicGrandCanyon);

        $this->command->info('They are terrorizing picnics!');


        Bear::create([
            'name' => 'Billy',
            'type' => 'Polar',
            'danger_level' => 10
        ]);

        Bear::create([
            'name' => 'Emilie',
            'type' => 'RrrrRRrR',
            'danger_level' => 10
        ]);

        Bear::firstOrCreate([
            'name' => 'Lawly'
        ]);
        Bear::firstOrCreate([
            'name' => 'Manon',
            'type' => 'The Pooh',
            'danger_level' => 0
        ]);
*/
    }
}
