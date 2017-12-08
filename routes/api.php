<?php

$api = app('api.router');
$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {

  /** @var \Dingo\Api\Routing\Router $api */
  $api->get('/', function () {
    //測試路由
    return app()->version();
  });

  $api->resource('nations','NationController');
  $api->resource('areas', 'AreaController');   //区域
  $api->resource('reports', 'ReportController');

  $api->group(['middleware' => 'jwt.auth'], function ($api) {

  });

});
