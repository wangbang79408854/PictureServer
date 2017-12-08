<?php namespace App\Http\Controllers;


use App\Repositories\Interfaces\ReportInterface;
use Illuminate\Http\Request;

class ReportController extends ApiController
{

    private $reportInterface;

    public function __construct(ReportInterface $reportInterface)
    {
        $this->reportInterface = $reportInterface;
    }

    public function index(Request $request)
    {
        $filter = $request->filter;
        $filterType = $request->filter_type;
        $perPage = $request->per_page;

        return $this->reportInterface->getReports($filter, $filterType, $perPage);
    }

    public function store(Request $request)
    {
        $this->validateFields($request);
        $this->reportInterface->createReport($request->all());

        return $this->respondSuccess(trans('success.create'));
    }

    public function update(Request $request, $id)
    {
        $this->validateFields($request);
        $nation = $this->reportInterface->updateReportById($id, $request->all());

        return $this->respondSuccess(trans('success.update'));
    }

    public function destroy($id)
    {
        $this->reportInterface->deleteReportById($id);

        return $this->respondSuccess(trans('success.delete'));
    }

    private function validateFields(Request $request)
    {
        $this->validate($request, [
            'informer_user_id' => 'required',
            'informer_remark' => 'required',
            'subject_type' => 'required',
            'subject_id' => 'required',
            'status' => 'required',
            'handler_user_id' => 'required',
            'handler_remark' => 'required',
        ]);
    }

}