<!doctype html>
<html lang="en">
	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}">
		<!-- Font Awesome -->
		<link href="{{asset('css/backend_css/custom.min.css')}}" rel="stylesheet">
		<!-- Custom Theme Style -->
		<link href="{{asset('css/backend_css/font-awesome.min.css')}}" rel="stylesheet">

		<title>Login</title>
	</head>

	<body class="login">
    @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{ session('flash_message_error') }}</strong>
        </div>
    @endif

    @if(Session::has('flash_message_sucess'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{ session('flash_message_sucess') }}</strong>
        </div>
    @endif

		<div class="login_wrapper">
			<div class="animate form login_form">
				<section class="login_content">
					<form method="post" action="{{url('admin')}}">
                        @csrf
						<h1>Login Form</h1>
						<div>
							<input type="email" class="form-control" placeholder="Email" name="email" required="" />
						</div>
						<div>
							<input type="password" class="form-control" placeholder="Password" name="password" required="" />
						</div>
						<div>
							<button type="submit" class="btn btn-secondary">Submit</button>
						</div>
						<div class="clearfix"></div>
					</form>
				</section>
			</div>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('js/backend_js/jquery-3.3.1.slim.min.js')}}"></script>
        <script src="{{asset('js/backend_js/popper.min.js')}}"></script>
        <script src="{{asset('js/backend_js/bootstrap.min.js')}}"></script>

	</body>
</html>
