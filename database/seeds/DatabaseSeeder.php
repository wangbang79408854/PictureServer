<?php

use Homemaking\Shared\Entities\Area;
use Homemaking\Shared\Entities\Report;
use Homemaking\Shared\Entities\Nation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

  //确保要seeder的数据库在下面的数组中，这样可以保证在重复执行db:seed的时候每次都是重新生成
  protected $toTruncate = [
    'areas','nations','reports'
  ];


  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Model::unguard();

    DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); //关闭外键检查

    foreach ($this->toTruncate as $table) {
      DB::table($table)->truncate();
    }


    factory(Area::class, 20)->create();
    factory(Report::class,10)->create();
    $this->call(NationTableSeeder::class);
    DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); //开启外键检查

    Model::reguard();
  }
}
