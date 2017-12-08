<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_infos', function (Blueprint $table) {
      $table->unsignedInteger('user_id')->primary()->comment('用户ID');
      $table->string('real_name', 32)->comment('真实姓名');
      $table->string('id_number', 18)->comment('身份证号码');
      $table->string('nickname', 32)->default('138XXXX1234')->comment('昵称');
      $table->string('avatar_url', 255)->comment('头像');
      $table->unsignedTinyInteger('gender')->default(0)->comment('性别');
      $table->unsignedSmallInteger('year_of_birth')->comment('出生年');
      $table->unsignedTinyInteger('month_of_birth')->comment('出生月');
      $table->unsignedTinyInteger('day_of_birth')->comment('出生日');
      $table->unsignedTinyInteger('age')->comment('年龄');
      $table->string('qq', 20)->comment('QQ号');
      $table->string('wechat', 80)->comment('微信号');
      $table->unsignedTinyInteger('chinese_zodiac')->default(0)->comment('生肖');
      $table->unsignedTinyInteger('constellation')->default(0)->comment('星座');
      $table->unsignedInteger('native_place_id')->comment('籍贯');
      $table->unsignedInteger('nation_id')->comment('民族');
      $table->unsignedTinyInteger('highest_education')->default(0)->comment('最高学历');
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
    Schema::dropIfExists('user_infos');
  }
}
