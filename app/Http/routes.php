<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return $app->welcome();
});

$app->get('/hello', function() {
    return 'Helloooo';
});

$app->get('user/{id}', function($id) {
    return 'User '.$id;
});

$app->get('user/{name:[A-Za-z]+}', function($name) {
    //
});