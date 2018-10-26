<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeedPermacultureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seeds_permacultures', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('seed_planted_id');
            $table->integer('seed_to_plant_id');
            $table->boolean('positive_effect');
            $table->enum('location', ['near', 'after']);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seeds_permacultures');
    }
}
