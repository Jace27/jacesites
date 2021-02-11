<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsOptionsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_options_types', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_options_types', function (Blueprint $table) {
            $table->string('name')->unique();
        });

        \App\Models\js_options_types::insert(array(
            array( 'name' => 'auto' ),
            array( 'name' => 'custom' ),
            array( 'name' => 'assign' ),
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
            $table->dropForeign('js_options_type_id_foreign');
        });
        Schema::dropIfExists('js_options_types');
    }
}
