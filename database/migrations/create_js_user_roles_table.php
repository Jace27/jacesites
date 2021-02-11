<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_user_roles', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_user_roles', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
        });

        \App\Models\js_user_roles::insert(array(
            array( 'user_id' => 1, 'role_id' => 1 ),
            array( 'user_id' => 1, 'role_id' => 2 ),
            array( 'user_id' => 1, 'role_id' => 6 ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('js_user_roles');
    }
}
