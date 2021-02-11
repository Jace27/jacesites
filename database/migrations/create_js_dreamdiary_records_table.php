<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsDreamdiaryRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_dreamdiary_records', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_dreamdiary_records', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->text('description')->nullable();
            $table->boolean('hidden')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('js_dreamdiary_record_tags', function (Blueprint $table) {
            $table->dropForeign('js_dreamdiary_record_tags_record_id_foreign');
        });
        Schema::dropIfExists('js_dreamdiary_records');
    }
}
