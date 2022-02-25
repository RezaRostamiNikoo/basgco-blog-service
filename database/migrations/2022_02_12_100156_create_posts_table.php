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
            $table->foreignId('author_id')->constrained('users');
            $table->foreignId('parent_id')->nullable()->constrained('posts');
            $table->string('meta_title');
            $table->string('title')->unique();
            $table->string('sub_title')->unique();
            $table->string('slug')->unique();
            $table->string('excerpt');
            $table->longText('content');

            $table->string('image_url')->nullable();

            $table->string('post_status');

            $table->string('comment_status');

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
