<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id');
            $table->integer('category_id');
            $table->string('title_uz');
            $table->string('title_cyrl')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();

            $table->text('description_uz');
            $table->text('description_cyrl')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ru')->nullable();

            $table->text('body_uz');
            $table->text('body_cyrl')->nullable();
            $table->text('body_en')->nullable();
            $table->text('body_ru')->nullable();

            $table->string('image')->nullable();
            $table->string('slug')->unique();


            $table->text('meta_keywords_uz')->nullable();
            $table->text('meta_keywords_cyrl')->nullable();
            $table->text('meta_keywords_en')->nullable();
            $table->text('meta_keywords_ru')->nullable();

            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
            $table->boolean('featured')->default(0);
            $table->timestamps();

            //$table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
