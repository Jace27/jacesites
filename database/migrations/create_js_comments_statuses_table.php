<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsCommentsStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_comments_statuses', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_comments_statuses', function (Blueprint $table) {
            $table->string('name');
        });

        \App\Models\js_comments_statuses::insert(array(
            array( 'name' => 'Старая версия' ),
            array( 'name' => 'Текущая версия' ),
            array( 'name' => 'Удален' ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('js_comments', function (Blueprint $table){
            $table->dropForeign('js_comments_status_id_foreign');
        });
        Schema::dropIfExists('js_comments_statuses');
    }
}
