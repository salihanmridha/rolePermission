


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
          									<h3 class="panel-title">Create Product</h3>
          								</div>
          								<div class="panel-body">
                            <form class="" action="{{route('customer.product.store')}}" method="post">
                              @csrf
          									<input type="text" name="product_title" class="form-control" placeholder="Product Title">

          									<br>
          									<textarea name="product_desc" class="form-control" placeholder="Product Description" rows="4"></textarea>
          									<br>
                            <button class="btn btn-primary" type="submit" name="save_product">Save Product</button>
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
