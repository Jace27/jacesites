<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsUsersSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_users_sessions', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_users_sessions', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->string('token');
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
        Schema::dropIfExists('js_users_sessions');
    }
}
