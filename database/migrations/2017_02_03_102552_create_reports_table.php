<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('reports', function (Blueprint $table) {
      $table->increments('id')->comment('举报 ID');
      $table->unsignedInteger('informer_user_id')->comment('举报人的用户 ID');
      $table->text('informer_remark')->comment('举报人的备注');
      $table->unsignedTinyInteger('subject_type')->comment('举报类型');
      $table->unsignedInteger('subject_id')->comment('举报主体的 ID');
      $table->unsignedTinyInteger('status')->comment('状态');
      $table->unsignedInteger('handler_user_id')->comment('处理人用户 ID');
      $table->text('handler_remark')->comment('处理人备注');
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
    Schema::dropIfExists('reports');
  }
}
