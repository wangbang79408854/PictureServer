<?php namespace App\Repositories\Interfaces;

interface ReportInterface
{
    public function getReports($filter, $filterType, $perPage);

    public function createReport($data);

    public function updateReportById($id, $data);

    public function deleteReportById($id);
}