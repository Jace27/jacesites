<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsMessagesStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_messages_statuses', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_messages_statuses', function (Blueprint $table) {
            $table->string('name')->unique();
        });

        \App\Models\js_messages_statuses::insert(array(
            array( 'name' => 'Текущая версия' ),
            array( 'name' => 'Старая версия' ),
            array( 'name' => 'Удалено' ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('js_messages', function (Blueprint $table) {
            $table->dropForeign('js_messages_status_id_foreign');
        });
        Schema::dropIfExists('js_messages_statuses');
    }
}
