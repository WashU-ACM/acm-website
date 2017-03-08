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

$app->get('/', function (){
    return view('welcome');
});

$app->get('/events/', 'EventsController@index');

$app->get('/projects/', 'ProjectsController@index');

$app->get('/icpc/', function (){
    return view('icpc');
});

$app->get('/officers/', function (){
    return view('officers');
});

$app->get('/sitemap/', 'SitemapController@index');
