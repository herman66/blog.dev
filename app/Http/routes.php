<?php


use App\Post;

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
//     //return view('welcome'去);
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

//Route::get('insert', function(){
    //DB::insert('INSERT INTO posts (title, `fulltext`) VALUES (?,?)', ['hi','hello']);
    //DB::insert('INSERT INTO posts (title, `fulltext`) VALUES (?,?)', ['英霸無隻','Hello World']);
//});

//Route::get('read',function(){
  //  $results = DB::select('SELECT * FROM posts WHERE id = ?',[1]);
    //return $results;
    //foreach ($results as $result) {
    //    echo $result->title . "<br>\n";
    //    echo $result->fulltext . "<br>\n";
    //}
    //var_dump($results);
//});

//Route:get('update', function(){
    //DB::update('UPDATE posts SET title = "天氣很好" WHERE id = ?', [1]);
    //$sql = DB::update('UPDATE posts SET title = "天氣很好" WHERE id = ?', [1]);
    //var_dump($sql);
  //  DB::update('UPDATE posts SET title = "天氣不好" WHERE id = ?', [1]);
    
//});新款Surface Pro採用Windows 10 Pro作業系統，搭載12吋觸控螢幕，重量只有766公克，在播放電影下電池續航力最長可達13.5小時，

//Route::get('delete', function(){
  //  $num = 2;
    //DB::delete('DELETE FROM posts WHERE id = ?', [$num]);
    //DB::delete('DELETE FROM posts WHERE id = 2');
//});



Route:get('read', function(){

    $posts = Post::all();
     return $posts;


    // $posts = Post::where('is_admin',0)
    //             ->orderBy('id','desc')
    //             ->take(2)
    //             ->get();

    //$post = Post::find(2);

    //$post = Post::where('is_admin',0)->first();

    //return $post->title;

    // foreach($posts as $post) {
    //     echo $post->id . ": " . $post->title . "<br>\n";
    // }

});


Route::get('insert/{title}/{fulltext}', function($title, $fulltext){

    $post = new Post;

    $post->title = "$title";
    $post->fulltext = "$fulltext";

    $post->save();


});


Route::get('create', function(){

    Post::create([

        'title'=>'kkman',
        'fulltext'=>'is super'

    ]);

});


Route::get('update/{id}/{title}/{fulltext}', function($id, $title, $fulltext){

    // $post = Post::find($id);

    // $post->title = "$title";
    // $post->fulltext = "$fulltext";

    // $post->save();

//流暢的寫法
    Post::where('id', $id)->where('is_admin',0)
        ->update([
            'title'=>$title,
            'fulltext'=>$fulltext
        ]);


});


Route::get('delete/{id}', function ($id) {

   $post = Post::find($id);
   $post->delete();

//    Post::destroy([1.3.5]);

});


Route::get('readall', function(){

    $posts = Post::withTrashed()->get();//find()
    return $posts;

});


Route::get('onlytrash', function(){

    $posts = Post::onlyTrashed()->get();
    return $posts; 

});

Route::get('restroe' , function(){

    Post::onlyTranshed()->restore();

});


Route::get('forcedelete', function(){

    Post::onlyTrashed()forceDelete();

});


Route::get('forcedelete/{id}', function($id){

    Post::onlyTrashed($id)forceDelete($id);

});