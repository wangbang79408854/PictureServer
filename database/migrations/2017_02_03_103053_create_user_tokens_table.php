<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTokensTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_tokens', function (Blueprint $table) {
      $table->unsignedInteger('user_id')->primary()->comment('用户 ID');
      $table->string('wechat_id', 255)->comment('微信 ID');
      $table->text('wechat_info')->comment('微信信息');
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
    Schema::dropIfExists('user_tokens');
  }
}
