<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('users')->delete();

        factory(App\User::class, 10)->create();

        User::create([
            'name' => 'manon.mirguet',
            'email' => 'manon.mirguet@student.heaj.be',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'QRpassword'=>'Dammy-CODE-1S4u7lJzehk62xDm3DgYgXXYWtbHE6gSP',
            'remember_token' => str_random(10),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address
        ]);
        User::create([
            'name' => 'emilie.habets',
            'email' => 'emilie.habets@student.heaj.be',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'QRpassword'=>'Dammy-CODE-1S4u7lJzehk62xDm3DgYgXXYWtbHE6gSP',
            'remember_token' => str_random(10),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address
        ]);
        User::create([
            'name' => 'billy.marcotty',
            'email' => 'billy.marcotty@student.heaj.be',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'QRpassword'=>'Dammy-CODE-1S4u7lJzehk62xDm3DgYgXXYWtbHE6gSP',
            'remember_token' => str_random(10),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address
        ]);
        User::create([
            'name' => 'louise.lepoivre',
            'email' => 'louise.lepoivre@student.heaj.be',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'QRpassword'=>'Dammy-CODE-1S4u7lJzehk62xDm3DgYgXXYWtbHE6gSP',
            'remember_token' => str_random(10),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address
        ]);
        User::create([
            'name' => 'christopher.saenen',
            'email' => 'christopher.saenen@student.heaj.be',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'QRpassword'=>'Dammy-CODE-1S4u7lJzehk62xDm3DgYgXXYWtbHE6gSP',
            'remember_token' => str_random(10),
            'phone' => $faker->phoneNumber,
            'address' => $faker->address
        ]);
    }
}
