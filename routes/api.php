<?php

$api->post('register', 'AuthController@register'); 
$api->post('login', 'AuthController@login');

$api->group(['middleware' => ['api.auth']], function ($api) {
	$api->get('users/me', function (Request $request) {
		return $request->user();
	});

	$api->resource('users', UserController::class, ['except' => ['create', 'edit']]);
});
