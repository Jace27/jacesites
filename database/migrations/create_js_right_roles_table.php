<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsRightRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_right_roles', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_right_roles', function (Blueprint $table) {
            $table->integer('right_id')->unsigned();
            $table->integer('role_id')->unsigned();
        });

        \App\Models\js_right_roles::insert(array(
            array( 'role_id'  => 1, 'right_id' => 1, ),
            array( 'role_id'  => 1, 'right_id' => 2, ),
            array( 'role_id'  => 1, 'right_id' => 3, ),
            array( 'role_id'  => 1, 'right_id' => 4, ),
            array( 'role_id'  => 1, 'right_id' => 5, ),
            array( 'role_id'  => 1, 'right_id' => 6, ),
            array( 'role_id'  => 1, 'right_id' => 7, ),
            array( 'role_id'  => 1, 'right_id' => 8, ),
            array( 'role_id'  => 1, 'right_id' => 9, ),
            array( 'role_id'  => 1, 'right_id' => 10, ),
            array( 'role_id'  => 1, 'right_id' => 11, ),

            array( 'role_id'  => 2, 'right_id' => 1, ),
            array( 'role_id'  => 2, 'right_id' => 2, ),
            array( 'role_id'  => 2, 'right_id' => 3, ),
            array( 'role_id'  => 2, 'right_id' => 4, ),
            array( 'role_id'  => 2, 'right_id' => 5, ),
            array( 'role_id'  => 2, 'right_id' => 6, ),
            array( 'role_id'  => 2, 'right_id' => 7, ),
            array( 'role_id'  => 2, 'right_id' => 8, ),
            array( 'role_id'  => 2, 'right_id' => 9, ),
            array( 'role_id'  => 2, 'right_id' => 10, ),
            array( 'role_id'  => 2, 'right_id' => 11, ),

            // array( 'role_id'  => 3, 'right_id' => 10, ),

            array( 'role_id'  => 4, 'right_id' => 5, ),
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('js_right_roles');
    }
}
