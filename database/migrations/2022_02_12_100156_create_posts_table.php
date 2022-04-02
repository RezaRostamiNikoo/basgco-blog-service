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
            $table->foreignId('author_id');
            $table->foreignId('parent_id')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('excerpt')->nullable();
            $table->string('title')->unique()->nullable();
            $table->string('sub_title')->unique()->nullable();
            $table->string('slug')->unique()->nullable();
            $table->longText('content')->nullable();

            $table->string('post_status')->default('preparing');

            $table->string('comment_status')->default('closed');

            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
