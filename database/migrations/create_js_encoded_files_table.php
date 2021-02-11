<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsEncodedFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_encoded_files', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_encoded_files', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->string('file');
            $table->string('password');
            $table->boolean('downloadable');
            $table->string('mime');
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
        Schema::dropIfExists('js_encoded_files');
    }
}
