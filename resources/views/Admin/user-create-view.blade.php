@extends('layouts.layout-admin')
@section('content')
    		  <div class="header">
                            <h1 class="page-header">
                                Add New user
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
                                <div class="title">Add New User</div>
                            </div>
                        </div>
                        <form class="" action="{{route('storeuser')}}" method="post">
                          @csrf
                          <div class="panel-body">
                              <div class="sub-title">Name</div>
                              <div>
                                  <input name="user_name" type="text" class="form-control" placeholder="User name">
                              </div>

                              <div class="sub-title">Email</div>
                              <div>
                                  <input name="user_email" type="email" class="form-control" placeholder="User email">
                              </div>

                              <div class="sub-title">Password</div>
                              <div>
                                  <input name="user_password" type="password" class="form-control" placeholder="User Password">
                              </div>

                              <div class="sub-title">Role</div>
                              <div>   

                                <?php foreach($roles as $role): ?>

                                <div class="checkbox3 checkbox-success checkbox-inline checkbox-check checkbox-round  checkbox-light">
                                  <input name="role[]" type="checkbox" id="" value="<?php echo $role['name']; ?>">
                                  <label for="">
                                    <?php echo $role['name']; ?>
                                  </label>
                                </div>

                                <?php endforeach; ?>
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
