<?php

include '../model/User.php';
include '../util/FileManager.php';

class UserController
{
	private $fileManager;

	public function __construct()
	{
		$this->fileManager = new FileManager();
	}
	
	public function registerUser($firstName, $lastName, $email, $password, $birthday)
	{
		$user = new User($firstName, $lastName, $email, $password, $birthday);
		$this->fileManager->write('../data/user.txt',$user->toString());
	}

}