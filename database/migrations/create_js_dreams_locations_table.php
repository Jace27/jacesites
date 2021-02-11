<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsDreamsLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_dreams_locations', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_dreams_locations', function (Blueprint $table) {
            $table->string('name')->unique();
            $table->text('description');
            $table->integer('tag_id')->unsigned()->nullable();
            $table->string('map_coords')->nullable();
            $table->string('map_shape')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('js_dreams_locations');
    }
}
