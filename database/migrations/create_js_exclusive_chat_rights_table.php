<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsExclusiveChatRightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('js_exclusive_chat_rights', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_exclusive_chat_rights', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('chat_id')->unsigned();
            $table->integer('right_id')->unsigned();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('js_exclusive_chat_rights');
    }
}
