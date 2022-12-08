<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_posts', function (Blueprint $table) {
            $table->id();
            $table-> unsignedBigInteger('user_id');
            $table-> unsignedBigInteger('post_id');

            $table->index('post_id', 'user_posts_post_idx');
            $table->index('user_id', 'user_posts_user_idx');

            $table->foreign('post_id', 'user_posts_post_fk')->on('posts')->references('id');
            $table->foreign('user_id', 'user_posts_user_fk')->on('users')->references('id');
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
        Schema::dropIfExists('user_posts');
    }
};
