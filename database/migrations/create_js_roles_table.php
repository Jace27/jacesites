<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_roles', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_roles', function (Blueprint $table) {
            $table->integer('type_id')->unsigned();
            $table->string('name');
        });

        \App\Models\js_roles::insert(array(
            array(
                'type_id' => 1,
                'name' => 'Разработчик'
            ),
            array(
                'type_id' => 1,
                'name' => 'Администратор сайта'
            ),
            array(
                'type_id' => 1,
                'name' => 'Модератор'
            ),
            array(
                'type_id' => 1,
                'name' => 'Редактор'
            ),
            array(
                'type_id' => 1,
                'name' => 'Пользователь'
            ),

            array(
                'type_id' => 2,
                'name' => 'Основатель'
            ),
            array(
                'type_id' => 2,
                'name' => 'Учитель'
            ),
            array(
                'type_id' => 2,
                'name' => 'Защитник традиции'
            ),
            array(
                'type_id' => 2,
                'name' => 'Сновидец'
            ),
            array(
                'type_id' => 2,
                'name' => 'Сталкер'
            ),
            array(
                'type_id' => 2,
                'name' => 'Видящий'
            ),
            array(
                'type_id' => 2,
                'name' => 'Курьер'
            ),
            array(
                'type_id' => 2,
                'name' => 'Новичок'
            ),

            array(
                'type_id' => 3,
                'name' => 'Администратор чата'
            ),
            array(
                'type_id' => 3,
                'name' => 'Собеседник'
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
        Schema::table('js_user_roles', function (Blueprint $table) {
            $table->dropForeign('js_user_roles_role_id_foreign');
        });
        Schema::table('js_right_roles', function (Blueprint $table) {
            $table->dropForeign('js_right_roles_role_id_foreign');
        });
        Schema::table('js_chat_users', function (Blueprint $table) {
            $table->dropForeign('js_chat_users_role_id_foreign');
        });
        Schema::dropIfExists('js_roles');
    }
}
