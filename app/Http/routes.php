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

//route: Home page/index for project 3
Route::get('/', function()
{
	return View::make('index');
});

//route: loremipsum paragraphs generator page
Route::get('/loremipsum', 'LoremIpsumController@getLoremipsum');
Route::post('/loremipsum', 'LoremIpsumController@postLoremipsum');

//route: randomuser generator page
Route::get('/randomuser', 'randomUserController@getRandomUser');
Route::post('/randomuser', 'randomUserController@postRandomUser');

//log view shown on local-env, hidden on production-env
if(App::environment('local')) {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
};
