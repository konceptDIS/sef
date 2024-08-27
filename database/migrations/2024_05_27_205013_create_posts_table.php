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
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('link')->nullable();
            $table->longText('content')->nullable();
            $table->text('excerpt');
            $table->string('thumbnail')->nullable();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->text('tags');
            $table->integer('comments_count')->default('0');
            $table->enum('status', array('0','1'))->default('0');
            $table->integer('views')->default(0);
            $table->integer('news_letter')->default('0');
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
