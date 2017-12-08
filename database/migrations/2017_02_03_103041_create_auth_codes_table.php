<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthCodesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('auth_codes', function (Blueprint $table) {
      $table->increments('id')->comment('登录验证码 ID');
      $table->unsignedInteger('user_id')->comment('用户 ID');
      $table->string('code', 6)->comment('随机数');
      $table->string('user_ip')->comment('用户 IP');
      $table->boolean('is_used')->default(false)->comment('是否使用');
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
    Schema::dropIfExists('auth_codes');
  }
}
