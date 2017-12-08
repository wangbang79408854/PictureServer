<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('resources', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedTinyInteger('type')->comment('类型');
      $table->text('content')->nullable()->comment('描述');
      $table->string('url', 255)->nullable()->comment('资源路径');
      $table->unsignedInteger('created_user_id')->comment('创建人用户 ID');
      $table->boolean('is_deleted')->default(0)->comment('删除状态');
      $table->unsignedInteger('size')->comment('文件大小');
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
    Schema::dropIfExists('resources');
  }
}
