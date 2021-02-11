<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsChatUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_chat_users', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_chat_users', function (Blueprint $table) {
            $table->integer('chat_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->integer('status_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('js_chat_users');
    }
}
