<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsDreamdiaryRecordTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_dreamdiary_record_tags', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_dreamdiary_record_tags', function (Blueprint $table) {
            $table->integer('record_id')->unsigned();
            $table->integer('tag_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('js_dreamdiary_record_tagss');
    }
}
