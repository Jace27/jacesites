<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsOptionsValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_options_values', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_options_values', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('option_id')->unsigned();
            $table->text('value')->nullable();
            $table->boolean('hidden')->default(false);
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
        Schema::dropIfExists('js_options_values');
    }
}
