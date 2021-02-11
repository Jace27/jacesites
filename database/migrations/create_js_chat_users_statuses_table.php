<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsChatUsersStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_chat_users_statuses', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_chat_users_statuses', function (Blueprint $table) {
            $table->string('name');
        });

        \App\Models\js_chat_users_statuses::insert(array(
            array( 'name' => 'Активный' ),
            array( 'name' => 'Наблюдатель' ),
            array( 'name' => 'Исключен' ),
            array( 'name' => 'Вышел' ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('js_chat_users', function (Blueprint $table){
            $table->dropForeign('js_chat_users_status_id_foreign');
        });
        Schema::dropIfExists('js_chat_users_statuses');
    }
}
