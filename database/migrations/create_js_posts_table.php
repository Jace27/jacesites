<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_posts', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_posts', function (Blueprint $table) {
            $table->string('title');
            $table->string('content_file');
            $table->integer('available_after')->unsigned()->nullable();
            $table->integer('right_id')->unsigned()->nullable();
            $table->string('show_after')->nullable();
            $table->integer('type_id')->unsigned();
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
        Schema::table('js_post_user_reads', function (Blueprint $table) {
            $table->dropForeign('js_post_user_reads_post_id_foreign');
        });
        Schema::table('js_posts', function (Blueprint $table) {
            $table->dropForeign('js_posts_available_after_foreign');
        });
        Schema::table('js_comments', function (Blueprint $table) {
            $table->dropForeign('js_comments_post_id_foreign');
        });
        Schema::dropIfExists('js_posts');
    }
}
