<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable();
            $table->string('description');
            $table->integer('status')->default(1)->comment('0 for Inactive 1 for Active')->nullable();
            $table->integer('create_user_id')->references('create_user_id')->on('users')->comment('User.id')
            ->nullable();
            $table->integer('updated_user_id')->references('updated_user_id')->on('users')->comment('User.id')
            ->nullable();
            $table->integer('deleted_user_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
