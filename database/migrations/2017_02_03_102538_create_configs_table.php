<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('configs', function (Blueprint $table) {
      $table->string('name', 180)->comment('参数名字');
      $table->string('namespace', 180)->comment('参数对应的范围');
      $table->text('value')->comment('参数值');
      $table->string('value_type', 80)->comment('参数类型');
      $table->text('description')->comment('参数描述');
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
    Schema::dropIfExists('configs');
  }
}