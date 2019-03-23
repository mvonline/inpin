<?php

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


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('agency',  ['uses' => 'AgencyController@showAllAgencies']);
  
    $router->get('agency/{id}', ['uses' => 'AgencyController@showOneagency']);
  
    $router->post('agency', ['uses' => 'AgencyController@create']);
  
    $router->delete('agency/{id}', ['uses' => 'AgencyController@delete']);
  
    $router->put('agency/{id}', ['uses' => 'AgencyController@update']);

    $router->get('listing',  ['uses' => 'ListingController@showAllListings']);
  
    $router->get('listing/{id}', ['uses' => 'ListingController@showOneListing']);
  
    $router->post('listing', ['uses' => 'ListingController@create']);
  
    $router->delete('listing/{id}', ['uses' => 'ListingController@delete']);
  
    $router->put('listing/{id}', ['uses' => 'ListingController@update']);
    
    $router->post('distance', ['uses' => 'AgencyController@finddistance']);

    $router->get('agencychild/{id}/{distance}',['uses'=> 'AgencyController@getChildInCircle']);
  });