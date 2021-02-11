<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsChatsStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_chats_statuses', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_chats_statuses', function (Blueprint $table) {
            $table->string('name')->unique();
        });

        \App\Models\js_chats_statuses::insert(array(
            array( 'name' => 'Активен' ),
            array( 'name' => 'Закрыт' ),
            array( 'name' => 'Заархивирован' ),
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
        Schema::table('js_chats', function (Blueprint $table) {
            $table->dropForeign('js_chats_status_id_foreign');
        });
        Schema::dropIfExists('js_chats_statuses');
    }
}
