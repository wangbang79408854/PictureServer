<?php

$api = app('api.router');
$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {

    /** @var \Dingo\Api\Routing\Router $api */
    $api->get('/', function () {
        //測試路由
        return  "当前服务器版本" . app()->version();
    });

//    $api->resource('reports', 'ReportController');

  //  $api->group(['middleware' => 'jwt.auth'], function ($api) {
    //
   // });

});
