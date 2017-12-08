<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('areas', function (Blueprint $table) {
      $table->increments('id')->comment('区域ID');
      $table->string('name', 60)->comment('名称');
      $table->unsignedInteger('parent_id')->comment('父区域 ID');
      $table->unsignedInteger('count_workers')->comment('劳务人员数量');
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
    Schema::dropIfExists('areas');
  }
}
