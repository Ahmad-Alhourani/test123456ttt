<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGemSightingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('gem_sightings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gem_id');
            $table->unsignedInteger('player_id')->nullable();
            $table->date('founded_at')->nullable();
            $table->double('lat');
            $table->double('lng');

            $table->dateTimeTz('created_at')->nullable();
            $table->dateTimeTz('updated_at')->nullable();
            $table->softDeletes();

            $table
                ->foreign('gem_id')
                ->references('id')
                ->on('gems')
                ->onDelete('cascade');
            $table
                ->foreign('player_id')
                ->references('id')
                ->on('players')
                ->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gem_sightings');
    }
}
