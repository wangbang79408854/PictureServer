<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkTypesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('work_types', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('parent_id')->default(0)->comment('父类');
      $table->string('name', 88)->comment('名称');
      $table->string('pinyin', 188)->comment('名称的拼音');
      $table->string('cost_range', 188)->comment('费用范围');
      $table->unsignedInteger('count_workers')->comment('工人数量');
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
    Schema::dropIfExists('work_types');
  }
}
