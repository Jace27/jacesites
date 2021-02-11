<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsSitePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_site_pages', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_site_pages', function (Blueprint $table) {
            $table->string('link');
            $table->string('name');
            $table->string('access');
            $table->boolean('show_in_menu')->default(true);
        });

        \App\Models\js_site_pages::insert(array(
            array(
                'link'         => '/',
                'name'         => 'Главная',
                'access'       => '',
                'show_in_menu' => false
            ),
            array(
                'link'         => '/profile',
                'name'         => 'Профиль',
                'access'       => '',
                'show_in_menu' => false
            ),
            array(
                'link'         => '/dream_diary',
                'name'         => 'Сновиденный дневник',
                'access'       => '',
                'show_in_menu' => false
            ),
            array(
                'link'         => '/dream_diary/new',
                'name'         => 'Добавить новый сон',
                'access'       => '',
                'show_in_menu' => false
            ),
            array(
                'link'         => '/chats',
                'name'         => 'Чаты',
                'access'       => '',
                'show_in_menu' => false
            ),
            array(
                'link'         => '/about',
                'name'         => 'О группе Искры Костра',
                'access'       => '',
                'show_in_menu' => true
            ),
            array(
                'link'         => '/dreammap',
                'name'         => 'Карта сновиденного мира',
                'access'       => '',
                'show_in_menu' => true
            ),
            array(
                'link'         => '/knowledge',
                'name'         => 'База знаний',
                'access'       => '',
                'show_in_menu' => true
            ),
            array(
                'link'         => '/saves',
                'name'         => 'Сохранения переписок',
                'access'       => '',
                'show_in_menu' => true
            ),
            array(
                'link'         => '/practical',
                'name'         => 'Сохранения практикумов',
                'access'       => '',
                'show_in_menu' => true
            ),
            array(
                'link'         => '/library',
                'name'         => 'Библиотека',
                'access'       => '',
                'show_in_menu' => true
            ),
            array(
                'link'         => '/pmcalcs',
                'name'         => 'ПМ калькуляторы',
                'access'       => '',
                'show_in_menu' => true
            ),
            array(
                'link'         => '/tools/randomizer',
                'name'         => 'Рандомайзер',
                'access'       => '',
                'show_in_menu' => true
            ),
            array(
                'link'         => '/tools/minipaint',
                'name'         => 'Редактор изображений',
                'access'       => '',
                'show_in_menu' => true
            ),
            array(
                'link'         => '/encoded_files',
                'name'         => 'Файловый обменник',
                'access'       => '',
                'show_in_menu' => true
            ),
            array(
                'link'         => '/games',
                'name'         => 'Игры',
                'access'       => '',
                'show_in_menu' => false
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
        Schema::table('js_title_events', function (Blueprint $table) {
            $table->dropForeign('js_title_events_page_id_foreign');
        });
        Schema::dropIfExists('js_site_pages');
    }
}
