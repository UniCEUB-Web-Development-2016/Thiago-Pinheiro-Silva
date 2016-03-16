<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Register</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<div class="container">
		
		<form action="control/ControlManager.php" method="post">
			
			<div class="form-group">
				<input type="text" name="firstName" placeholder="Type your first name" class="form-control">
				<input type="text" name="lastName" placeholder="Type your last name" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" name="email" placeholder="Type your e-mail">
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Type your password" class="form-control">
			</div>
			<div class="form-group">
				<input type="date" name="birthday" class="form-control">
			</div>
			<button type="submit" class="btn btn-default">Register</button>

		</form>

	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>
</body>
</html>