<?php

class Responsable extends User
{

	public function __construct($username, $password, $name, $email, $phone, $address, $gender, $birth)
	{
		$this->setUsername($username);
		$this->setPassword($password);
		$this->setName($name);
		$this->setEmail($email);
		$this->setPhone($phone);
		$this->setAddress($address);
		$this->setGender($gender);
		$this->setBirth($birth);
	}

}