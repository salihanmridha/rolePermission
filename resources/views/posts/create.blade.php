@extends('layouts.layout-admin')
@section('content')
    		  <div class="header">
                            <h1 class="page-header">
                                Create New Post <small>Create new post.</small>
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
                                <div class="title">Add New Post</div>
                            </div>
                        </div>
                        <form class="" action="{{route('posts.store')}}" method="post">
                          @csrf
                          <div class="panel-body">
                              <div class="sub-title">Title</div>
                              <div>
                                  <input name="post_title" type="text" class="form-control" placeholder="Post Title">
                              </div>
                              <div class="sub-title">Description</div>
                              <div>
                              <textarea name="post_desc" class="form-control" rows="3"></textarea>
                              </div>
                              <p></p>
                              <div class="">
                                <button class="btn btn-primary" type="submit" name="save_post">Save Post</button>
                              </div>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
@endsection
