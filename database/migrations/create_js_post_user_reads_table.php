<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsPostUserReadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_post_user_reads', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_post_user_reads', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->unsigned();
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
        Schema::dropIfExists('js_post_user_reads');
    }
}
