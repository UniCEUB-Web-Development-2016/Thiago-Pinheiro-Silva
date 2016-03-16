<?php

class User
{

	private $firstName;
	private $lastName;
	private $email;
	private $password;
	private $birthday;

	public function __construct($firstName, $lastName, $email, $password, $birthday)
	{
		$this->setFirstName($firstName);
		$this->setLastName($lastName);
		$this->setEmail($email);
		$this->setPassword($password);
		$this->setBirthday($birthday);
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}

	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getBirthday()
	{
		return $this->birthday;
	}

	public function setBirthday($birthday)
	{
		$this->birthday = $birthday;
	}

	public function toString()
	{
		return getFirstName();
	}

}