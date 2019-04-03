@extends('layouts.layout-admin')
@section('content')
    		  <div class="header">
                            <h1 class="page-header">
                                Update Post
                            </h1>
    						<ol class="breadcrumb">
    					  <li><a href="#">Home</a></li>
    					  <li><a href="#">Empty</a></li>
    					  <li class="active">Data</li>
    					</ol>

    		  </div>

          <div id="page-inner">

              <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          @if(Session::has('success'))
                          <div class="alert alert-success">
                            {{Session::get('success')}}
                          </div>
                          @endif

                          @if(count($errors) > 0)
                          <div class="alert alert-danger">
                            Error: Your form not saved in database. Check your Form!
                          </div>
                          @endif
                            <div class="card-title">
                                <div class="title">Update Post</div>
                            </div>
                        </div>
                        <form class="" method="post" action="{{route('posts.update', $post->id)}}">
                          @method('PUT')
                          @csrf
                          <div class="panel-body">
                              <div class="sub-title">Title</div>
                              <div>
                                  <input name="post_title" type="text" class="form-control" value="{{$post->title}}">
                              </div>
                              <div class="sub-title">Description</div>
                              <div>
                              <textarea name="post_desc" class="form-control" rows="3">{{$post->post_content}}</textarea>
                              </div>
                              <p></p>
                              <div class="">
                                <button class="btn btn-primary" type="submit" name="save_post">Update Post</button>
                              </div>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
@endsection
