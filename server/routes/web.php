<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/teste', function () use ($router){
    return response()-> json();
});

$router->group(['prefix' => 'register'], function() use ($router){
  $router->get('/', ['uses' => 'RegisterController@index']);
  $router->get('/{id}', ['uses' => 'RegisterController@show']);
  $router->put('/', ['uses' => 'RegisterController@store']);
  $router->get('/{id}',['uses' => 'RegisterController@update']);
  $router->delete('/{id}', ['uses' => 'RegisterController@destroy']);
});
