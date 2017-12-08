<?php namespace App\Http\Controllers;

use App\Repositories\Interfaces\NationInterface;
use Dingo\Api\Http\Response;
use Illuminate\Http\Request;

class NationController extends ApiController {

  private $nationInterface;

  public function __construct(NationInterface $nationInterface)
  {
    $this->nationInterface = $nationInterface;
  }

  public function index(Request $request)
  {
    $filter = $request->filter;
    $filterType= $request->filter_type;
    $perPage = $request->per_page;

    return $this->nationInterface->getNations($filter, $filterType, $perPage);
  }


  public function store(Request $request)
  {
    $this->validateFields($request);
    $this->nationInterface->createNation($request->all());

    return $this->respondSuccess(trans('success.create'));
  }

  public function update(Request $request, $id)
  {
    $this->validateFields($request);
    $nation = $this->nationInterface->updateNationById($id, $request->all());

    return $this->respondSuccess(trans('success.update'));
  }

  public function destroy($id)
  {
    $this->nationInterface->deleteNationById($id);

    return $this->respondSuccess(trans('success.delete'));
  }

  private function validateFields(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
    ]);
  }

}