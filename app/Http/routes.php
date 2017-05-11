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

//Route::get('contact', 'PostsController@showContact');

//Route::get('post/{gategory}/{date}/{id}', 'PostsController@showPost');

//Route::get('error', function(){
    //return view('errors.503');
//});

//Route::get('insert', function(){

    //DB::insert('INSERT INTO posts (title, `fulltext`) VALUES (?,?)' , ['英霸無隻'，'Hello World']);
//DB::insert('INSERT INTO posts (title, `fulltext`) VALUES (?,?)', ['英霸無隻','Hello World']);
//});

Route::get('insert', function(){
    //DB::insert('INSERT INTO posts (title, `fulltext`) VALUES (?,?)', ['hi','hello']);
    DB::insert('INSERT INTO posts (title, `fulltext`) VALUES (?,?)', ['英霸無隻','Hello World']);
});

Route::get('read',function(){
    $results = DB::select('SELECT * FROM posts WHERE id = ?',[1]);
    //return $results;
    //foreach ($results as $result) {
    //    echo $result->title . "<br>\n";
    //    echo $result->fulltext . "<br>\n";
    //}
    var_dump($results);
});

Route:get('update', function(){
    //DB::update('UPDATE posts SET title = "天氣很好" WHERE id = ?', [1]);
    //$sql = DB::update('UPDATE posts SET title = "天氣很好" WHERE id = ?', [1]);
    //var_dump($sql);
    DB::update('UPDATE posts SET title = "天氣不好" WHERE id = ?', [1]);
    
});

Route::get('delete', function(){
    $num = 2;
    DB::delete('DELETE FROM posts WHERE id = ?', [$num]);
    //DB::delete('DELETE FROM posts WHERE id = 2');
});