<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkerTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('worker', function (Blueprint $table) {
      $table->unsignedInteger('worker_user_id')->primary();
      $table->unsignedTinyInteger('status')->default(0)->comment('工作状态');
      $table->timestamp('updated_status_at')->comment('工作状态更新时间');
      $table->unsignedInteger('work_place')->comment('工作城市');
      $table->string('off_day', 180)->comment('休息描述');
      $table->unsignedTinyInteger('wage_pay_way')->comment('工资支付方式');
      $table->unsignedInteger('wage')->comment('工资');
      $table->text('tags')->comment('标签');
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
    Schema::dropIfExists('worker');
  }
}
