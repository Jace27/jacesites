<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_messages', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_messages', function (Blueprint $table) {
            $table->integer('message_id')->unsigned();
            $table->text('content');
            $table->integer('user_id')->unsigned();
            $table->string('chat');
            $table->integer('status_id')->unsigned();
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
        Schema::table('js_message_user_reads', function (Blueprint $table) {
            $table->dropForeign('js_message_user_reads_last_message_id_foreign');
        });
        Schema::dropIfExists('js_messages');
    }
}
