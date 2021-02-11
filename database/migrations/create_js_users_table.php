<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js_users', function (Blueprint $table) {
            $table->increments('id');
        });
        Schema::table('js_users', function (Blueprint $table) {
            $table->string('nick');
            $table->string('password')->default(password_hash(hash('sha256', '12345678'), PASSWORD_BCRYPT));
            $table->timestamps();
        });

        \App\Models\js_users::insert(array(
            'nick' => 'jace'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('js_user_roles', function (Blueprint $table) {
            $table->dropForeign('js_user_roles_user_id_foreign');
        });
        Schema::table('js_messages', function (Blueprint $table) {
            $table->dropForeign('js_messages_user_id_foreign');
        });
        Schema::table('js_message_user_reads', function (Blueprint $table) {
            $table->dropForeign('js_message_user_reads_user_id_foreign');
        });
        Schema::table('js_chat_users', function (Blueprint $table) {
            $table->dropForeign('js_chat_users_user_id_foreign');
        });
        Schema::table('js_post_user_reads', function (Blueprint $table) {
            $table->dropForeign('js_post_user_reads_user_id_foreign');
        });
        Schema::table('js_comments', function (Blueprint $table) {
            $table->dropForeign('js_comments_user_id_foreign');
        });
        Schema::table('js_options_values', function (Blueprint $table) {
            $table->dropForeign('js_options_values_user_id_foreign');
        });
        Schema::table('js_dreamdiary_records', function (Blueprint $table) {
            $table->dropForeign('js_dreamdiary_records_user_id_foreign');
        });
        Schema::table('js_users_sessions', function (Blueprint $table) {
            $table->dropForeign('js_users_sessions_user_id_foreign');
        });
        Schema::table('js_encoded_files', function (Blueprint $table) {
            $table->dropForeign('js_encoded_files_user_id_foreign');
        });
        Schema::dropIfExists('js_users');
    }
}
