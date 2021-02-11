<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_options', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_options', function (Blueprint $table) {
            $table->string('name')->unique();
            $table->integer('type_id')->unsigned();
            $table->integer('page_id')->unsigned();
            $table->string('input_attrs');
        });

        \App\Models\js_options::insert(array(
            array(
                'name' => 'Имя',
                'type_id' => 2,
                'page_id' => 1,
                'input_attrs' => 'type="text"',
            ),
            array(
                'name' => 'Фамилия',
                'type_id' => 2,
                'page_id' => 1,
                'input_attrs' => 'type="text"',
            ),
            array(
                'name' => 'Отчество',
                'type_id' => 2,
                'page_id' => 1,
                'input_attrs' => 'type="text"',
            ),
            array(
                'name' => 'Город',
                'type_id' => 2,
                'page_id' => 1,
                'input_attrs' => 'type="text"',
            ),
            array(
                'name' => 'Часовой пояс',
                'type_id' => 2,
                'page_id' => 1,
                'input_attrs' => 'type="text"',
            ),
            array(
                'name' => 'Время рождения',
                'type_id' => 2,
                'page_id' => 1,
                'input_attrs' => 'type="time"',
            ),
            array(
                'name' => 'День рождения',
                'type_id' => 2,
                'page_id' => 1,
                'input_attrs' => 'type="number" min="1" max="31"',
            ),
            array(
                'name' => 'Месяц рождения',
                'type_id' => 2,
                'page_id' => 1,
                'input_attrs' => 'type="number" min="1" max="12"',
            ),
            array(
                'name' => 'Год рождения',
                'type_id' => 2,
                'page_id' => 1,
                'input_attrs' => 'type="number" min="1900" max="2100"',
            ),

            array(
                'name' => 'Основной цвет',
                'type_id' => 2,
                'page_id' => 2,
                'input_attrs' => 'type="color"',
            ),
            array(
                'name' => 'Фоновое изображение',
                'type_id' => 2,
                'page_id' => 2,
                'input_attrs' => 'type="file"',
            ),
            array(
                'name' => 'Размер шрифта',
                'type_id' => 2,
                'page_id' => 2,
                'input_attrs' => 'type="number" min="4" max="30"',
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
        Schema::table('js_options_values', function (Blueprint $table) {
            $table->dropForeign('js_options_values_option_id_foreign');
        });
        Schema::dropIfExists('js_options');
    }
}
