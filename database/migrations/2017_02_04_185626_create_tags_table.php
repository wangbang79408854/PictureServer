<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tags', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name', 180)->comment('名称');
      $table->boolean('is_common')->default(false)->comment('是否常用');
      $table->boolean('is_deleted')->default(false)->comment('是否删除');
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
    Schema::dropIfExists('tags');
  }
}
