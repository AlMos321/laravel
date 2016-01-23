<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpizodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epizodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('number');
            $table->string('images')->nullable();
            $table->string('producer')->nullable();
            $table->string('directed')->nullable();
            $table->time('running_time')->nullable();
            $table->integer('season_id');
            $table->integer('date_start');
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
        Schema::drop('epizodes');
    }
}
