
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Register</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<style type="text/css">
		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #eee;
		}

		.form-register {
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}
		.form-register .form-register-heading,
		.form-register .checkbox {
			margin-bottom: 10px;
		}
		.form-register .checkbox {
			font-weight: normal;
		}
		.form-register .form-control {
			position: relative;
			height: auto;
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
			padding: 10px;
			font-size: 16px;
		}
		.form-register .form-control:focus {
			z-index: 2;
		}
		.form-register input[type="text"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}
		.form-register input[type="email"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
		.form-register input[type="password"] {
			margin-bottom: -1px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
	</style>
</head>

<body>

	<div class="container">

		<form class="form-register" method="POST" action="/register">
			{{csrf_field()}}
			<h2 class="form-register-heading">Register</h2>

			<label for="email" class="sr-only">Full name</label>
			<input type="text" name="name" class="form-control" placeholder="Full name" required autofocus>

			<label for="email" class="sr-only">Email address</label>
			<input type="email" name="email" class="form-control" placeholder="Email address" required>

			<label for="password" class="sr-only">Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" required>

			<label for="password_confirmation" class="sr-only">Password Confirmation</label>
			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password Confirmation" required>

			<button class="btn btn-lg btn-primary btn-block" style="margin-top:10px" type="submit">Register</button>
		</form>

	</div> 

</body>
</html>
