<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('token');
            $table->date('birth_date');
            $table->unsignedInteger('level_id');

            $table->dateTimeTz('created_at')->nullable();
            $table->dateTimeTz('updated_at')->nullable();
            $table->softDeletes();

            $table
                ->foreign('level_id')
                ->references('id')
                ->on('levels')
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
        Schema::dropIfExists('players');
    }
}
