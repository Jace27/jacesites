<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsTablesLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('js_roles', function (Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('js_roles_types');//
        });
        Schema::table('js_user_roles', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('js_users');//
            $table->foreign('role_id')->references('id')->on('js_roles');//
        });
        Schema::table('js_right_roles', function (Blueprint $table) {
            $table->foreign('right_id')->references('id')->on('js_rights');//
            $table->foreign('role_id')->references('id')->on('js_roles');//
        });

        Schema::table('js_messages', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('js_users');//
            $table->foreign('status_id')->references('id')->on('js_messages_statuses');//
        });

        Schema::table('js_message_user_reads', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('js_users');//
            $table->foreign('last_message_id')->references('id')->on('js_messages');//
        });

        Schema::table('js_chats', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('js_chats_statuses');//
        });
        Schema::table('js_chat_users', function (Blueprint $table) {
            $table->foreign('chat_id')->references('id')->on('js_chats');//
            $table->foreign('user_id')->references('id')->on('js_users');//
            $table->foreign('role_id')->references('id')->on('js_roles');//
            $table->foreign('status_id')->references('id')->on('js_chat_users_statuses');//
        });

        Schema::table('js_posts', function (Blueprint $table) {
            $table->foreign('available_after')->references('id')->on('js_posts');//
            $table->foreign('right_id')->references('id')->on('js_rights');//
            $table->foreign('type_id')->references('id')->on('js_posts_types');//
        });
        Schema::table('js_post_user_reads', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('js_posts');//
            $table->foreign('user_id')->references('id')->on('js_users');//
        });

        Schema::table('js_comments', function (Blueprint $table){
            $table->foreign('status_id')->references('id')->on('js_comments_statuses');//
            $table->foreign('post_id')->references('id')->on('js_posts');//
            $table->foreign('user_id')->references('id')->on('js_users');//
            $table->foreign('parent_id')->references('id')->on('js_comments');//
        });

        Schema::table('js_options', function (Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('js_options_types');//
            $table->foreign('page_id')->references('id')->on('js_options_pages');//
        });
        Schema::table('js_options_values', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('js_users');//
            $table->foreign('option_id')->references('id')->on('js_options');//
        });

        Schema::table('js_dreamdiary_tags', function (Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('js_dreamdiary_tags_groups');//
        });
        Schema::table('js_dreamdiary_record_tags', function (Blueprint $table) {
            $table->foreign('record_id')->references('id')->on('js_dreamdiary_records');//
            $table->foreign('tag_id')->references('id')->on('js_dreamdiary_tags');//
        });
        Schema::table('js_dreamdiary_records', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('js_users');//
        });

        Schema::table('js_dreams_locations', function (Blueprint $table) {
            $table->foreign('tag_id')->references('id')->on('js_dreamdiary_tags');//
        });

        Schema::table('js_title_events', function (Blueprint $table) {
            $table->foreign('page_id')->references('id')->on('js_site_pages');//
        });

        Schema::table('js_users_sessions', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('js_users');//
        });

        Schema::table('js_encoded_files', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('js_users');//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
