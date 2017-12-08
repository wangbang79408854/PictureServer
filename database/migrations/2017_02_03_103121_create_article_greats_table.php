<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleGreatsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('article_greats', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('article_id')->comment('文章 ID');
      $table->unsignedInteger('created_user_id')->comment('点赞用户 ID');
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
    Schema::dropIfExists('article_greats');
  }
}
