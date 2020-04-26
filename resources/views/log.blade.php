@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
	body {
       background: -webkit-linear-gradient(bottom, #AB3E16, #48120E);
       background-repeat: no-repeat;
	}
	#card {
        background: #F8F3E6;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 500px;
        margin: 3.8rem auto 3.6rem auto;
        width: 1000px;
	}
	#card-content {
		padding: 12px 44px;
	}
	#card-title {
		font-family: "Raleway Thin", sans-serif;
		letter-spacing: 4px;
		padding-bottom: 23px;
		padding-top: 13px;
		text-align: center;
	}
	.underline-title {
		background: -webkit-linear-gradient(right, #AB3E16, #48120E);
		height: 2px;
		margin: -1.1rem auto 0 auto;
		width: 89px;
	}
	a {
		text-decoration: none;
	}
	label {
		font-family: "Raleway", sans-serif;
		font-size: 11pt;
	}
	#forgot-pass {
		color: #AB3E16;
		font-family: "Raleway", sans-serif;
		font-size: 10pt;
		margin-top: 3px;
		text-align: right;
	}
	.form {
		align-items: center;
		display: flex;
		flex-direction: column;
	}
	.form-border {
		background: -webkit-linear-gradient(right, #AB3E16, #48120E);
		height: 1px;
		width: 40%;
	}
	.form-content {
		width: 40%;
		height: 50px;
		border: none;
		border-bottom: 1px solid #AB3E16;
		font-size: 16px;
		font-family: "Raleway", sans-serif;
		background: #fbfbfb;
		outline: none;
	}
	#signup {
		color: #AB3E16;
		font-family: "Raleway", sans-serif;
		font-size: 10pt;
		margin-top: 16px;
		text-align: center;
	}
	#submit-btn {
		background: -webkit-linear-gradient(right, #AB3E16, #48120E);
		border: none;
		border-radius: 21px;
		box-shadow: 0px 1px 8px #AB3E16;
		cursor: pointer;
		color: white;
		font-family: "Raleway SemiBold", sans-serif;
		height: 42.3px;
		margin: 0 auto;
		margin-top: 50px;
		transition: 0.25s;
		width: 153px;
	}
	#submit-btn:hover {
		box-shadow: 0px 1px 18px #48120E;
	}
  </style>
 </head>
 <body>
	<div id="card">
		<div id="card-content">
			<div id="card-title">
				<h2>PEMINJAMAN RUANGAN/TEMPAT</h2>
		<div class="underline-title"></div>
			</div>
		</div>
		<form method="post" class="form" action="{{ route('login') }}">
		@csrf
			<label for="email" class="padding-top:13px">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
				<label for="password" class="padding-top:22px">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
				<div class="form-border"></div>
			<a href="#"><legend id="forgot-pass">Forgot password?</legend></a>
			<input id="submit-btn" type="submit" name="submit" value="LOGIN" />
			<a href="#" id="signup">Don't have account yet?</a>
		</form>
	</div>
 </body>
</html