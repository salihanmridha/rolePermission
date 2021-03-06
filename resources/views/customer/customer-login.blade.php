
<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('assets/sub-backoffice/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/sub-backoffice/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/sub-backoffice/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('assets/sub-backoffice/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('assets/sub-backoffice/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/sub-backoffice/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/sub-backoffice/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"></div>
								<p class="lead">Login to your account</p>
							</div>
								<form class="form-auth-small" role="form" method="POST" action="{{ url('/customer/login') }}">
										{{ csrf_field() }}
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<label for="signin-email" class="control-label sr-only">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
									@if ($errors->has('email'))
											<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
											</span>
									@endif
								</div>
								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input id="password" type="password" class="form-control" name="password">
									@if ($errors->has('password'))
											<span class="help-block">
													<strong>{{ $errors->first('password') }}</strong>
											</span>
									@endif
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a class="btn btn-link" href="{{ url('/admin/password/reset') }}">
											Forgot Your Password?
									</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Sub user backoffice</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
