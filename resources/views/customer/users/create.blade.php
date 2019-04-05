@extends('layouts.sub-dashboard.layout-sub-admin')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Panels</h3>
			<div class="row">
				<div class="col-md-12">
          <div class="panel">
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
									<h3 class="panel-title">Create Customer</h3>
								</div>
								<div class="panel-body">
                  <form class="" action="{{route('customer.user.store')}}" method="post">
                    @csrf
                  <input name="user_name" type="text" class="form-control" placeholder="User Name">
									<br>
									<input name="user_email" type="email" class="form-control" placeholder="User Email">
									<br>
									<input name="user_password" placeholder="password" type="password" class="form-control">

									<br>
                  <h3>Roles</h3>
                  @for($i = 0; $i < count($roles); $i++)
									<label class="fancy-checkbox">
										<input name="role_name[]" type="checkbox" value="{{$roles[$i]}}">
										<span>{{$roles[$i]}}</span>
									</label>
                  @endfor
                  <br>
                  <button class="btn btn-primary" type="submit" name="save_post">Create User</button>
								</form>

								</div>
							</div>
				</div>

			</div>





		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection
