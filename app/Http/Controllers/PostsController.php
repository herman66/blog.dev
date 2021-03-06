<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\CreatePostRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //echo "Hello World" ;
        $posts = Post::all();
        
        return view('posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //
        //dd($request->all());
        
        // $this->validate($request, [
        //     'title'=>'required | min: 8 | max: 20',
        //     'fulltext'=>'required'
        // ]);

        Post::create($request->all());

        // $post = new Post;

        // $post->title = $request->title;
        // $post->fulltext = $request->fulltext;
        // $post->save();

        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePostRequest $request, $id)
    {
        //

// $this->validate($request, [
//             'title'=>'required | min: 8 | max: 20',
//             'fulltext'=>'required'
//         ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect('/posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Ilcontact.blade.phpluminate\Http\Response
     */
    public function destroy($id)
    {
        //contact.blade.php
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts');
    }

    public function showContact(){
        
        //$imba = ['jane','soso','test'];
        $imba = [];

        return view('contact', compact('imba'));
        //return view('errors.503');
    }


    public function showPost($category, $date, $id){
        // return view('post')->with('id' ,$id);
        return view('post', compact('category', 'date', 'id'));

    }
}


