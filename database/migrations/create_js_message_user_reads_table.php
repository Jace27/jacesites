<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsMessageUserReadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_message_user_reads', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_message_user_reads', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('last_message_id')->unsigned();
            $table->string('chat');
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
        Schema::dropIfExists('js_message_user_readss');
    }
}
