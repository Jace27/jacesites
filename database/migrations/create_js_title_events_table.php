<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsTitleEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_title_events', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_title_events', function (Blueprint $table) {
            $table->integer('page_id')->unsigned()->nullable();
            $table->string('title')->default('');
            $table->string('description');
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
        Schema::dropIfExists('js_title_events');
    }
}
