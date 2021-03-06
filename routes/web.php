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

$router->get('/student/list', 'StudentController@list');
$router->post('/student/create', 'StudentController@create');
$router->get('/student/read/{id}', 'StudentController@read');
$router->get('/student/hi/{id}','StudentController@hello_student');
