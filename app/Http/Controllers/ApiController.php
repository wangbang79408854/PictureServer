<?php namespace App\Http\Controllers;

use App\Utils\ApiResponse;
use App\Utils\ApiValidatesRequests;
use App\Utils\Constants;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController {
  use ApiValidatesRequests;
  use ApiResponse;
}