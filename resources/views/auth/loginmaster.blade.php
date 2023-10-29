<!DOCTYPE html>
<head>
	<!-- templatemo 418 form pack -->
    <!--
    Form Pack
    http://www.templatemo.com/preview/templatemo_418_form_pack
    -->
	<title>Login Page </title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-social.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
</head>
<body class="templatemo-bg-image-1">
	<div class="container">
		<div class="col-md-12">
			
				<div class="row">
					<div class="col-md-12">
						<h1>Login </h1>
                        <hr>
     <form action="{{route('login-user')}}" method="post">
     @if(Session::has('success'))
     <div class="alert alert-success">{{Session::get('success')}}</div>
     @endif

 @if(Session::has('fail'))
     <div class="alert alert-danger">{{Session::get('fail')}}</div>
     @endif
     @csrf

					</div>
				</div>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
				       <div class="form-group">
    <div class="col-md-12">
        <label for="email" class="control-label">Email</label>
        <div class="templatemo-input-icon-container">
            <i class="fa fa-user"></i>
            <input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{ old('email') }}">
            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-12">
        <label for="password" class="control-label">Password</label>
        <div class="templatemo-input-icon-container">
            <i class="fa fa-lock"></i>
            <input type="password" class="form-control" placeholder="Enter Password" name="password">
            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
        </div>
    </div>
</div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <div class="checkbox">
				                <label>
				                  <input type="checkbox"> Remember me
				                </label>
				            </div>
				          </div>
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <input type="submit" value="LOG IN" class="btn btn-warning">
				          </div>
				        </div>
				        <div class="form-group">
				          	<div class="col-md-12">
				        		
								<br>
                                <a href="registration">New User !! Register Here.</a>

				       	 	</div>
				    	</div>
					</div>
					
						<a class="btn btn-block btn-social btn-facebook margin-bottom-15">
						    <i class="fa fa-facebook"></i> Sign in with Facebook
						</a>
						<a class="btn btn-block btn-social btn-twitter margin-bottom-15">
						    <i class="fa fa-twitter"></i> Sign in with Twitter
						</a>
						<a class="btn btn-block btn-social btn-google-plus">
						    <i class="fa fa-google-plus"></i> Sign in with Google
						</a>
					</div>   
				</div>				 	
		      </form>		      		      
		</div>
	</div>
</body>
</html>