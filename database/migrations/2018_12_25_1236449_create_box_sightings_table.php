<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxSightingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('box_sightings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('player_id')->nullable();
            $table->unsignedInteger('box_id');
            $table->date('founded_at');
            $table->double('lat');
            $table->double('lng');

            $table->dateTimeTz('created_at')->nullable();
            $table->dateTimeTz('updated_at')->nullable();
            $table->softDeletes();

            $table
                ->foreign('player_id')
                ->references('id')
                ->on('players')
                ->onDelete('cascade');
            $table
                ->foreign('box_id')
                ->references('id')
                ->on('boxes')
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
        Schema::dropIfExists('box_sightings');
    }
}
