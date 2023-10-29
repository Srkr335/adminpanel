<!DOCTYPE html>
<head>
	<!-- templatemo 418 form pack -->
    <!-- 
    Form Pack
    http://www.templatemo.com/preview/templatemo_418_form_pack 
    -->
	<title>Registration Page</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
	<h1 class="margin-bottom-15">Registration</h1>
	<div class="container">
		<div class="col-md-12">			
			
            <form action="{{ route('register-user') }}" method="post"> <!-- Corrected route name and method -->
                @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                @if(Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif

                @csrf 
				 <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name" value="{{ old('name') }}">
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>

                <div class="form-group">
                    <label for="email">Email</label> <!-- Changed 'for' to match the input id -->
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{ old('email') }}">
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>

                <div class="form-group">
                    <label for="password">Password</label> <!-- Changed 'for' to match the input id -->
                    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" value="">
                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-block btn-primary" type="submit">Register</button>
                </div>
                <br>
                <a href="/">Already Registered !! Login Here.</a>
            </form>
        </div>
    </div>
</div>

	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>