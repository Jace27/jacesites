<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsOptionsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_options_pages', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_options_pages', function (Blueprint $table) {
            $table->string('name')->unique();
        });

        \App\Models\js_options_pages::insert(array(
            array( 'name' => 'Личные данные' ),
            array( 'name' => 'Оформление сайта' ),
            array( 'name' => 'Технические настройки' ),
            array( 'name' => 'Сновиденная статистика' ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('js_options', function (Blueprint $table) {
            $table->dropForeign('js_options_page_id_foreign');
        });
        Schema::dropIfExists('js_options_pages');
    }
}
