<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\UserTableSeeder;
use Illuminate\Database\SeedTableSeeder;
use Illuminate\Database\IllnessTableSeeder;
use Illuminate\Database\SoilTableSeeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->command->info('User app seed finished');
        $this->call('SeedTableSeeder');
        $this->command->info('Seeds are planted');
        $this->call('IllnessTableSeeder');
        $this->command->info('Beware of illnesses');
        $this->call('SoilTableSeeder');
        $this->command->info('Perfect Soils');
    }
}
