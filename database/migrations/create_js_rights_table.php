<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsRightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_rights', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_rights', function (Blueprint $table) {
            $table->string('name');
            $table->text('description')->nullable();
        });

        \App\Models\js_rights::insert(array(
            array( 'name' => 'Управление информацией о пользователе' ), // установка, изменение, удаление личной информации
            array( 'name' => 'Управление присваиваемыми пользовательскими данными' ), // установка, изменение, удаление данных типа assignable
            array( 'name' => 'Управление ролями пользователя' ), // добавление, изменение, удаление роли
            array( 'name' => 'Управление правами пользователя' ), // добавление, изменение, удаление исключительных прав

            array( 'name' => 'Управление постами' ), // создание, редактирование, удаление постов всех типов

            array( 'name' => 'Управление ролями участников беседы' ), // добавление, изменение, удаление роли
            array( 'name' => 'Управление правами участников беседы' ), // добавление, изменение, удаление исключительных прав
            array( 'name' => 'Управление составом беседы' ), // добавление новых пользователей в беседу и исключение старых
            array( 'name' => 'Изменить информацию о беседе' ), // изменение названия и автарки
            array( 'name' => 'Управление чужими сообщениями в беседе' ), // редактирование, удаление
            array( 'name' => 'Написать сообщение в беседу' ),
            /*
            array( 'name' => '' ), */
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('js_right_roles', function (Blueprint $table) {
            $table->dropForeign('js_right_roles_right_id_foreign');
        });
        Schema::table('js_posts', function (Blueprint $table) {
            $table->dropForeign('js_posts_right_id_foreign');
        });
        Schema::dropIfExists('js_rights');
    }
}
