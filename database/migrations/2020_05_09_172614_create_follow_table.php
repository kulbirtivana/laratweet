<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create(config('follow.followable_table', 'followables'), function (Blueprint $table) {
            $userForeignKey = config('follow.users_table_foreign_key', 'user_id');

            // Laravel 5.8 session user is unsignedBigInteger
            // https://github.com/laravel/framework/pull/28206/files
            if ((float) app()->version() >= 5.8) {
                $table->unsignedBigInteger($userForeignKey);
            } else {
                $table->unsignedInteger($userForeignKey);
            }

            $table->unsignedInteger('followable_id');
            $table->string('followable_type')->index();
            $table->string('relation')->default('follow')->comment('follow/like/subscribe/favorite/upvote/downvote');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign($userForeignKey)
                ->references(config('follow.users_table_primary_key', 'id'))
                ->on(config('follow.users_table_name', 'users'))
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follow');
    }
}
