<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsRolesTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_roles_types', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_roles_types', function (Blueprint $table) {
            $table->string('name')->unique();
        });

        \App\Models\js_roles_types::insert(array(
            array( 'name' => 'на сайте' ),
            array( 'name' => 'в группе' ),
            array( 'name' => 'в чате' ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('js_roles', function (Blueprint $table) {
            $table->dropForeign('js_roles_type_id_foreign');
        });
        Schema::dropIfExists('js_roles_types');
    }
}
