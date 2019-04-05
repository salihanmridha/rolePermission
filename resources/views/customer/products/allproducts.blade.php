@extends('layouts.sub-dashboard.layout-sub-admin')
@section('content')
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Panels</h3>
			<div class="row">
        <div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Striped Row</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Product Title</th>
												<th>Action</th>
											</tr>
										</thead>
                    @php
                      $i = 1;
                    @endphp
										<tbody>
                      @foreach($products as $product)
											<tr>
												<td>{{$i++}}</td>
												<td>{{$product->title}}</td>
												<td>
                          <td>
                          @if(Auth::guard('customer')->user()->can('Edit Product'))
                          <a class="btn btn-primary" href="">Edit</a>
                          @endif


                            @if(Auth::guard('customer')->user()->can('Delete Product'))
                            <a class="btn btn-danger" href=""  onclick="event.preventDefault();
                                        document.getElementById('delete-post').submit();">Delete</a>
                            <form id="delete-post" action="" method="POST" style="display: none;">
                              @method('DELETE')
                                @csrf
                            </form>
                            @endif

                          </td>
                        </td>
											</tr>
                      @endforeach
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>

			</div>





		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
@endsection
