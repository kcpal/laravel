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


//Route::get('/', 'HomeController@index');
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/', 'PagesController@index');
//Route::get('about', 'PagesController@about');

//Route::get('/', function()
//{
//    return 'Home Page';
//});


//Route::bind('song', function($slug)
//{
//    return App\Song::whereSlug($slug)->first();
////    return App\Song::where('slug', $slug)->first();
//});

//$router->bind('song', function($slug)
//{
//    return App\Song::whereSlug($slug)->first();
//});

//Route::get('');
//$router->get();
//get('songs', 'SongsController@index');
////get('songs/{slug}', 'SongsController@show');
////get('songs/{song}/edit', 'SongsController@edit');
////get('songs/{slug}/edit', 'SongsController@edit');
////patch('songs/{slug}', 'SongsController@update');
//get('songs/{song}', 'SongsController@show');
//get('songs/{song}/edit', 'SongsController@edit');
//patch('songs/{song}', 'SongsController@update');
*/
/*
$router->bind('songs', function($slug)
{
    return App\Song::whereSlug($slug)->first();
});
$router->resource('songs', 'SongsController',[
//    'only' => [
//        'index', 'show', 'edit', 'update'
//    ],
    'except' => [
        'create'
    ]
]);

$router->resource('people', 'PeopleController');*/

/* This block is hard coding for the dynamic routing i.e. if we change music to songs, then also the don't
have to change the routing parameters in the anchor<a> tags for reference href.
$router->bind('song', function($slug)
{
    return App\Song::whereSlug($slug)->first();
});

$router->get('music', ['as' => 'songs_path', 'uses' => 'SongsController@index']);
$router->get('music/{song}', ['as' => 'song_path', 'uses' => 'SongsController@show']);
*/


$router->bind('songs', function($slug)
{
    return App\Song::whereSlug($slug)->first();
});

$router->resource('songs', 'SongsController');
$router->resource('pages', 'PagesController@index');
$router->resource('/', 'SongsController@index');

//$router->resource('{artist}/songs', 'SongsController', [
//    'names' => [
//        'index' => 'songs_path',
//        'show' => 'song_path'
//    ],
//    'only' => ['index', 'show']
//]);