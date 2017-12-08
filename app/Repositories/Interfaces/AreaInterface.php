<?php namespace App\Repositories\Interfaces;

interface AreaInterface {

  public function getAreas($filter, $filterType, $perPage);

  public function createArea($data);

  public function updateAreaById($id, $data);

  public function deleteAreaById($id);
}