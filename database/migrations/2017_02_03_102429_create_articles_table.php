<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('articles', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title', 255)->comment('标题');
      $table->string('cover_url', 255)->comment('封面图路径');
      $table->string('intro', 200)->comment('简介');
      $table->text('content_md')->comment('内容的 markdown 格式');
      $table->text('content')->comment('解析后内容');
      $table->string('url', 255)->comment('访问路径');
      $table->boolean('is_accessed')->default(true)->comment('访问路径状态');
      $table->unsignedTinyInteger('status')->default(0)->comment('文章状态');
      $table->unsignedInteger('created_user_id')->default(0)->comment('创建文章用户');
      $table->boolean('is_ad')->comment('是否为广告');
      $table->boolean('is_deleted')->default(0)->comment('删除状态');
      $table->unsignedInteger('count_comments')->comment('评论数量');
      $table->unsignedInteger('count_greats')->comment('赞数量');
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
    Schema::dropIfExists('articles');
  }
}
