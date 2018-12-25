<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelGemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('level_gems', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('gem_id');
            $table->unsignedInteger('level_id');
            $table->Integer('count');

            $table->dateTimeTz('created_at')->nullable();
            $table->dateTimeTz('updated_at')->nullable();
            $table->softDeletes();

            $table
                ->foreign('gem_id')
                ->references('id')
                ->on('gems')
                ->onDelete('cascade');
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
        Schema::dropIfExists('level_gems');
    }
}
