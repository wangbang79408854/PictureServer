<?php namespace App\Http\Controllers;

use App\Repositories\Interfaces\AreaInterface;
use Illuminate\Http\Request;

class AreaController extends ApiController {

  public function __construct(AreaInterface $areaInterface)
  {
    $this->areaInterface = $areaInterface;
  }

  public function index(Request $request)
  {
    $filter = $request->filter;
    $filterType = $request->filter_type;
    $perPage = $request->per_page;

    return $this->areaInterface->getAreas($filter, $filterType, $perPage);
  }

  private function validateFields(Request $request)
  {
    $this->validate($request, [
      'name'          => 'required',
      'parent_id'     => 'required',
      'count_workers' => 'required',
    ]);
  }

  public function store(Request $request)
  {
    $this->validateFields($request);
    $area = $this->areaInterface->createArea($request->all());

    return $this->respondWithItem($area);
  }

  public function update(Request $request, $id)
  {
    $this->validateFields($request);
    $area = $this->areaInterface->updateAreaById($id, $request->all());

    return $this->respondWithItem($area);
  }

  public function destroy($id)
  {
    $this->areaInterface->deleteAreaById($id);

    return $this->respondSuccess(trans('success.delete'));
  }
}