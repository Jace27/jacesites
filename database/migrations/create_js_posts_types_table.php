<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsPostsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_posts_types', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_posts_types', function (Blueprint $table) {
            $table->string('name')->unique();
            $table->string('folder');
        });

        \App\Models\js_posts_types::insert(array(
            array(
                'name' => 'Статья',
                'folder' => '/articles'
            ),
            array(
                'name' => 'Книга',
                'folder' => '/books'
            ),
            array(
                'name' => 'Практикум',
                'folder' => '/practicals'
            ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('js_posts', function (Blueprint $table) {
            $table->dropForeign('js_posts_type_id_foreign');
        });
        Schema::dropIfExists('js_posts_types');
    }
}
