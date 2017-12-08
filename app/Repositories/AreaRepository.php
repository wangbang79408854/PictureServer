<?php namespace App\Repositories;

use App\Repositories\Interfaces\AreaInterface;
use Homemaking\Shared\Entities\Area;

class AreaRepository implements AreaInterface {

  public function getAreas($filter, $filterType, $perPage)
  {
    $query = Area::orderBy('id');
    if ($filter) {
      $value = "%{$filter}%";
      if ($filterType == 'null') {
        $query->where('name', 'like', $value);
        $query->orWhere('parent_id', 'like', $value);
        $query->orWhere('count_workers', 'like', $value);
      } else {
        $filterType == "name" ?
          $query->where('name', 'like', $value) : null;
        $filterType == "parent_id" ?
          $query->orWhere('parent_id', 'like', $value) : null;
        $filterType == "count_workers" ?
          $query->orWhere('count_workers', 'like', $value) : null;
      }
    }

    return $query->paginate($perPage);
  }

  public function createArea($data)
  {
    $area = Area::create([
      'name'          => $data['name'],
      'parent_id'     => $data['parent_id'],
      'count_workers' => $data['count_workers'],
    ]);

    return $area;
  }

  public function updateAreaById($id, $data)
  {
    $area = Area::find($id);
    $area->name = $data['name'];
    $area->parent_id = $data['parent_id'];
    $area->count_workers = $data['count_workers'];
    $area->save();

    return $area;
  }

  public function deleteAreaById($id)
  {
    Area::destroy($id);
  }
}