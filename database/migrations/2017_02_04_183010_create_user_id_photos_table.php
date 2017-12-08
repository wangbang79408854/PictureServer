<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserIdPhotosTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_id_photos', function (Blueprint $table) {
      $table->unsignedInteger('user_id')->primary()->comment('用户 ID');
      $table->text('resources')->comment('证件照图片路径');
      $table->unsignedTinyInteger('type')->default(0)->comment('证件照类型');
      $table->boolean('is_deleted')->default(0)->comment('删除状态');
      $table->unsignedTinyInteger('status')->default(0)->comment('状态');
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
    Schema::dropIfExists('user_id_photos');
  }
}
