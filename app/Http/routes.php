<?php
$api = app('Dingo\Api\Routing\Router');

// Version 1 of our API
$api->version('v1', function ($api) {

	// Set our namespace for the underlying routes
	$api->group(['namespace' => 'Api\Controllers', 'middleware' => '\Barryvdh\Cors\HandleCors::class'], function ($api) {

		// Login route
		$api->post('login', 'AuthController@authenticate');
		$api->post('register', 'AuthController@register');

		// EquipmentType! All routes in here are protected and thus need a valid token
		//$api->group( [ 'protected' => true, 'middleware' => 'jwt.refresh' ], function ($api) {
		$api->group( [ 'middleware' => 'jwt.auth' ], function ($api) {

			$api->get('users/me', 'AuthController@me');
			$api->get('validate_token', 'AuthController@validateToken');
			
			$api->get('manufacturers', 'ManufacturersController@index');
			$api->post('manufacturers', 'ManufacturersController@store');
			$api->get('manufacturers/{id}', 'ManufacturersController@show');
			$api->delete('manufacturers/{id}', 'ManufacturersController@destroy');
			$api->put('manufacturers/{id}', 'ManufacturersController@update');

			$api->get('equipmenttypes', 'EquipmentTypeController@index');
			$api->post('equipmenttypes', 'EquipmentTypeController@store');
			$api->get('equipmenttypes/{id}', 'EquipmentTypeController@show');
			$api->delete('equipmenttypes/{id}', 'EquipmentTypeController@destroy');
			$api->put('equipmenttypes/{id}', 'EquipmentTypeController@update');

			$api->get('users', 'AuthController@index');
			$api->get('users/{id}', 'AuthController@show');
			$api->delete('users/{id}', 'AuthController@destroy');
			$api->put('users/{id}', 'AuthController@update');
		});

	});

});
