<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_chats', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_chats', function (Blueprint $table) {
            $table->string('name')->unique();
            $table->string('image')->default('chat-default.png');
            $table->integer('status_id')->unsigned()->default(0);
            $table->string('token')->nullable();
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
        Schema::table('js_chat_users', function (Blueprint $table) {
            $table->dropForeign('js_chat_users_chat_id_foreign');
        });
        Schema::dropIfExists('js_chats');
    }
}
