<?php

include 'view/LayoutManager.php';
include 'UserController.php';

/*$uc = new UserController();
$uc->registerUser(
		$_POST['firstName'],
		$_POST['lastName'],
		$_POST['email'],
		$_POST['password'],
		$_POST['birthday']
	);*/

class ControlManager
{

	private $layout;

	public static function start()
	{
		$this->layout = new LayoutManager();
	}

	public function getLayout()
	{
		return $this->layout;
	}

	public function setLayout($layout)
	{
		$this->layout = $layout;
	}

}