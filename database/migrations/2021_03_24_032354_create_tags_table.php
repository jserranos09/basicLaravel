<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tags', function (Blueprint $table) {
      $table->id();
      //a strong column for the name of the tag
      $table->string('name')->unique();
      $table->timestamps();
    });

    // for a pivot table (articles and tags). This is where the database will show what article is associated with what tag
    Schema::create('articles_tag', function (Blueprint $table) { //connect 2 tables, pivot table, alphabetical order "article_tag" not  tag_article
      $table->id();
      // the connection to the article
      $table->unsignedBigInteger('articles_id');
      // the connection to the tag
      $table->unsignedBigInteger('tag_id');
      $table->timestamps();

      // so the combination of the article and tag id must be unique
      $table->unique(['articles_id', 'tag_id']);

      // if an article is deleted, deletes the article and id reference
      $table->foreign('articles_id')->references('id')->on('articles')->onDelete('cascade'); //article_id reference id column on articles table and if we delete the article cascade and delete as well
      // if an article is deleted, the tag id associated with it is deleted
      $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('article_tag');
    Schema::dropIfExists('tags');
  }
}



