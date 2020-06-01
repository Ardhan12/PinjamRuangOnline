
@section('content')
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Peminjaman Ruangan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/AdminLTE.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 <head>
 <body class="hold-transition login-page">
	<div class="login-box">
  	<!-- /.login-logo -->
  		<div class="login-box-body">
    		<div class="login-logo">
      			<a href="/index2.html"><b>Peminjaman Ruangan/Tempat</b></a>
    		</div>
    		<p class="login-box-msg">Login untuk booking ruangan</p>

			<form method="post" class="form" action="{{ route('login') }}">
			@csrf
				<label for="email" class="padding-top:13px">{{ __('E-Mail Address') }}</label>
            	<div class="form-group has-feedback">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
					<span class="glyphicon glyphicon-envelope form-control-feedback">
                    <!-- <span class="invalid-feedback" role="alert"> -->
                    	<strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
				<label for="password" class="padding-top:22px">{{ __('Password') }}</label>
                <div class="form-group has-feedback">
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
					 @error('password')
					<span class="glyphicon glyphicon-lock form-control-feedback">
                    <!--<span class="invalid-feedback" role="alert">-->
                    	<strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
				<div class="row">
        			<div class="col-xs-8">
        		</div>
        		<!-- /.col -->
        		<div class="col-xs-4">
        		<!--<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>-->
					<input id="submit-btn" class="btn btn-primary btn-block btn-flat" type="submit" name="submit" value="LOGIN" />
				</div>		
<!--
				<div class="form-border"></div>
			<a href="#"><legend id="forgot-pass">Forgot password?</legend></a>
			<input id="submit-btn" type="submit" name="submit" value="LOGIN" />
			<a href="#" id="signup">Don't have account yet?</a> -->
			</form>
		</div>
	</div>
<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 </body>
</html