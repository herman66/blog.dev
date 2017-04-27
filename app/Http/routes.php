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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/demo', function () {
//     //return view('welcome');
//     return "Hello World";
// });

// contact
// Route::get('/about', function () {
//     return "Page: About";
// });

// Route::get('/contact', function () {
//     return "Page: Contact";
// });

// Route::get('/post/{id}', function ($id) {
//     return "Post Article ID: " . $id;
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "Post Article ID: " . $id . ",Name:" .$name;
// });

// Route::get('/admin/posts/example', array('as'=>'admin.home', function () {
//     $url = route('admin.home');
//     return "URL: " . $url;
// }));

// Route::get('/post/{id}', 'PostsController@index' );

// Route::resource('post', 'PostsController' );

Route::get('contact', 'PostsController@showContact');

Route::get('post/{gategory}/{date}/{id}', 'PostsController@showPost');

Route::get('error', function(){
    return view('errors.503');
});