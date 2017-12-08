<?php namespace App\Repositories;

use App\Repositories\Interfaces\NationInterface;
use Homemaking\Shared\Entities\Nation;

class NationRepository implements NationInterface {

  public function getNations($filter, $filterType, $perPage)
  {
    $query = Nation::orderBy('id');
    if ($filter) {
      $value = "%{$filter}%";
      if ($filterType === 'null') {
        $query->where('name', 'like', $value);
        $query->orWhere('count_workers', 'like', $value);
      } else {
        $filterType === "name" ?
          $query->where('name', 'like', $value) : null;
        $filterType === "count_workers" ?
          $query->orWhere('count_workers', 'like', $value) : null;
      }
    }

    return $query->paginate($perPage);
  }

  public function createNation($data)
  {
    Nation::create([
      'name' => $data['name'],
    ]);
  }

  public function updateNationById($id, $data)
  {
    $nation = Nation::find($id);
    $nation->name = $data['name'];
    $nation->save();
  }

  public function deleteNationById($id)
  {
    Nation::destroy($id);
  }
}