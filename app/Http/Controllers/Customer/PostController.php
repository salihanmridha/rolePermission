<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CustomerPosts;
use Illuminate\Support\Facades\Auth;
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
       $this->middleware('customer');
   }
    public function index()
    {
      $user = Auth::guard('customer')->user();
      $userID = $user->id;
      $posts = CustomerPosts::where('created_by', $userID)->get();
      return view('customer.posts.allposts')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.posts.create');
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
      $user = Auth::guard('customer')->user();
      $userID = $user->id;
      $this->validate($request, array(
        'post_title' => 'required',
        'post_desc'  => 'required'
      ));
      //storing data to database
      $post = new CustomerPosts();

      $post->title = $request->post_title;
      $post->post_content = $request->post_desc;
      $post->created_by = $userID;


      if ($post->save()) {
        Session::flash('success', 'You have successfully save data to database!');
      }

      //redirect to another page
      return redirect()->route('customer.post.create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
