<?php namespace App\Repositories\Interfaces;

interface NationInterface {

  public function getNations($filter, $filterType, $perPage);

  public function createNation($data);

  public function updateNationById($id, $data);

  public function deleteNationById($id);

}