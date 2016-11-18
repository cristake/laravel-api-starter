<?php

// use App\Http\Controllers\UserController;
// use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $api->group(['middleware' => ['auth:api']], function ($api) {
		$api->get('users/me', function (Request $request) {
		    return $request->user();
		});
    });

    $api->resource('users', UserController::class);
});