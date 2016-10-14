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

$app->get('/',function(){
  return view('login');
});

$app->get('wosFiles',function(){
  return view('wosfiles');
});

$app->post('/createNewFolder','filesController@createNewFolder');

$app->post('/getMyFolders','filesController@getMyFolders');

$app->get('/carpeta={id}','filesController@gotoFolder');
$app->post('/createNewFile','filesController@createNewFile');
$app->post('/getFilesByFolder','filesController@getFilesByFolder');
