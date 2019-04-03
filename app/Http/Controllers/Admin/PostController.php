<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }
     public function index()
     {
         //
     }

     public function dashboardAllPost()
     {
         $posts = Post::all();
         return view('posts.dashboard-post-list')->withPosts($posts);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('posts.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       //validate the data
       $this->validate($request, array(
         'post_title' => 'required',
         'post_desc'  => 'required'
       ));
       //storing data to database
       $user = Auth::user();
       $userID = $user->id;

       $post = new Post();

       $post->title = $request->post_title;
       $post->post_content = $request->post_desc;
       $post->created_by = $userID;


       if ($post->save()) {
         Session::flash('success', 'You have successfully save data to database!');
       }

       //redirect to another page
       return redirect()->route('posts.create');
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
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $post = Post::find($id);
       if ($post) {
         return view('posts.edit-post')->withPost($post);
       }else {
         abort(404);
       }
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
       //validate the data
       $this->validate($request, array(
         'post_title' => 'required',
         'post_desc'  => 'required'
       ));

       //update data to database
       $post = Post::find($id);

       $post->title = $request->post_title;
       $post->post_content = $request->post_desc;

       if ($post->save()) {
         Session::flash('success', 'You have successfully update data to database!');
         //redirect to another page
         return redirect()->route('posts.edit', $post->id);
       }
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $post = Post::find($id);

       if ($post->delete()) {
         Session::flash('success', 'You have successfully delete data from database!');
         //redirect to another page
         return redirect()->route('allposts');
       }
     }
}
