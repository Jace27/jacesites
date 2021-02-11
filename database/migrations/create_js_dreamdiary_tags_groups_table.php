<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsDreamdiaryTagsGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_dreamdiary_tags_groups', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_dreamdiary_tags_groups', function (Blueprint $table) {
            $table->string('name')->unique();
        });

        \App\Models\js_dreamdiary_tags_groups::insert(array(
            array( 'name' => 'Персонажи' ),
            array( 'name' => 'Степень осознанности' ),
            array( 'name' => 'Локации' ),
            array( 'name' => 'Уровень сна' ),
            array( 'name' => 'Мир' ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('js_dreamdiary_tags', function (Blueprint $table) {
            $table->dropForeign('js_dreamdiary_tags_group_id_foreign');
        });
        Schema::dropIfExists('js_dreamdiary_tags_groups');
    }
}
