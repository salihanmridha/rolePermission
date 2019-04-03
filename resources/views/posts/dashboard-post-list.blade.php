@extends('layouts.layout-admin')
@section('content')
    		  <div class="header">
                            <h1 class="page-header">
                                View All Posts
                            </h1>
    						<ol class="breadcrumb">
    					  <li><a href="#">Home</a></li>
    					  <li><a href="#">Empty</a></li>
    					  <li class="active">Data</li>
    					</ol>

    		  </div>

          <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                      <!--    Striped Rows Table  -->
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
                            All Posts
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Post Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                          $i = 1;
                                        @endphp
                                        @foreach($posts as $post)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td> <a href="">{{$post->title}}</a> </td>

                                            <td>
                                            <a class="btn btn-primary" href="{{route('posts.edit', $post->id)}}">Edit</a>
                                            


                                              <a class="btn btn-danger" href="{{route('posts.destroy', $post->id)}}"  onclick="event.preventDefault();
                                                          document.getElementById('delete-post').submit();">Delete</a>
                                              <form id="delete-post" action="{{route('posts.destroy', $post->id)}}" method="POST" style="display: none;">
                                                @method('DELETE')
                                                  @csrf
                                              </form>

                                            </td>

                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>

            </div>

@endsection
