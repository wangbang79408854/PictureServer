<?php namespace App\Repositories;


use Homemaking\Shared\Entities\Report;
use App\Repositories\Interfaces\ReportInterface;

class ReportRepository implements ReportInterface
{

    public function getReports($filter, $filterType, $perPage)
    {
        // TODO: Implement getReports() method.
        $query = Report::orderBy('id');
        if ($filter) {
            $value = "%{$filter}%";
            if ($filterType == 'null') {
                $query->where('informer_remark', 'like', $value);
                $query->orWhere('subject_type', 'like', $value);
                $query->orWhere('status', 'like', $value);
                $query->orWhere('handler_remark', 'like', $value);
            } else {
                $filterType == "informer_remark" ?
                    $query->where('informer_remark', 'like', $value) : null;
                $filterType == "subject_type" ?
                    $query->orWhere('subject_type', 'like', $value) : null;
                $filterType == "status" ?
                    $query->orWhere('status', 'like', $value) : null;
                $filterType == "handler_remark" ?
                    $query->orWhere('handler_remark', 'like', $value) : null;
            }
        }
        return $query->paginate($perPage);
    }

    public function createReport($data)
    {
        $report = Report::create([
            'informer_user_id' => $data['informer_user_id'],
            'informer_remark' => $data['informer_remark'],
            'subject_type' => $data['subject_type'],
            'subject_id' => $data['subject_id'],
            'status' => $data['status'],
            'handler_user_id' => $data['handler_user_id'],
            'handler_remark' => $data['handler_remark'],
        ]);

        return $report;
    }

    public function updateReportById($id, $data)
    {
        $report = Report::find($id);
        $report->informer_user_id = $data['informer_user_id'];
        $report->informer_remark = $data['informer_remark'];
        $report->subject_type = $data['subject_type'];
        $report->subject_id = $data['subject_id'];
        $report->status = $data['status'];
        $report->handler_user_id = $data['handler_user_id'];
        $report->handler_remark = $data['handler_remark'];
        $report->save();

        return $report;
    }

    public function deleteReportById($id)
    {
        Report::destroy($id);
    }
}