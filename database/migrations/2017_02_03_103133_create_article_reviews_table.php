<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleReviewsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('article_reviews', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('article_id')->comment('文章 ID');
      $table->unsignedInteger('reviewer_user_id')->comment('审核员 ID');
      $table->timestamp('reviewed_time')->comment('审核时间');
      $table->text('reviewer_remark')->comment('审核备注');
      $table->unsignedTinyInteger('status')->default(0)->comment('审核状态');
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
    Schema::dropIfExists('article_reviews');
  }
}
