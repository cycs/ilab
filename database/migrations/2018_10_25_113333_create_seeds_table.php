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
            $table->string('exposure');
            $table->string('water');
            $table->string('fertilizer');
            $table->date('planting_period_start');
            $table->date('planting_period_end');
            $table->date('harvest_period_start');
            $table->date('harvest_period_end');
            $table->string('grown_img_url');
            $table->string('seed_img_url');
            $table->integer('price');
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
