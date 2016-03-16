<?php

include 'UserController.php';

$uc = new UserController();
$uc->registerUser(
		$_POST['firstName'],
		$_POST['lastName'],
		$_POST['email'],
		$_POST['password'],
		$_POST['birthday']
	);