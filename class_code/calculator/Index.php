<!DOCTYPE html>
<html>
<head>
	<title>UniCEUB - Desenvolvimento para Web - Calculadora</title>
</head>
<body>
	<h1>Calculator</h1>
	<form action="Controller.php" method="post">
		<h2>Radius</h2><hr>
		<input type="text" name="radius" placeholder="Radius">
		<input type="submit" value="Calculate">
		<br>
		<h2>Hypotenuse</h2><hr>
		<input type="text" name="adjacent" placeholder="Adjacent cathetus">
		<input type="text" name="opposite" placeholder="Opposite cathetus">
		<input type="submit" value="Calculate">
	</form>
</body>
</html>