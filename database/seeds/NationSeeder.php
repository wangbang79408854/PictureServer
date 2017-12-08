<?php

use Illuminate\Database\Seeder;
use Homemaking\Shared\Entities\Nation;

class NationTableSeeder extends Seeder {

  protected $data = [
    ['name' => '汉族', 'count_workers' => 0,],
    ['name' => '朝鲜族', 'count_workers' => 0,],
    ['name' => '傣族', 'count_workers' => 0,],
    ['name' => '壮族', 'count_workers' => 0,],
    ['name' => '满族', 'count_workers' => 0,],
    ['name' => '回族', 'count_workers' => 0,],
  ];

  public function run()
  {
    foreach ($this->data as $value) {
      Nation::create([
        'name'          => $value['name'],
        'count_workers' => $value['count_workers'],
      ]);
    }
  }
}