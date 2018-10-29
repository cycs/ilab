<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seeds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('latin_name');
            $table->string('variety');
            $table->string('type');
            $table->string('exposure')->default('ensoleillé');
            $table->string('water')->default('modéré');
            $table->string('fertilizer')->default('ne nécessite aucun engrais');
            $table->date('planting_period_start')->default('2018-01-01');
            $table->date('planting_period_end')->default('2018-04-30');
            $table->date('harvest_period_start')->default('2018-05-01');
            $table->date('harvest_period_end')->default('2018-09-30');
            $table->integer('harvest_within_time')->default(0);
            $table->string('grown_img_url')->default('/tomate_fruit.jpg');
            $table->string('seed_img_url')->default('/tomate_seeds.jpg');
            $table->integer('price')->default('3.00');
            $table->enum('difficulty', ['super easy', 'easy', 'medium', 'hard', 'very hard']);
            $table->text('tutorial');
            $table->text('advices');
            $table->tinyInteger('soil_ph')->default(7);
            $table->tinyInteger('soil_humus_percent')->default(5);
            $table->string('soil_granulometry')->default('limons fins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seeds');
    }
}
