<?php

class User
{

	private $username;
	private $password;
	private $name;
	private $email;
	private $phone;
	private $address;
	private $gender;
	private $birth;

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

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getUsername()
	{
		return $username;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getPassword()
	{
		return $password;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $name;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $email;
	}

	public function setPhone($phone)
	{
		$this->phone = $phone;
	}

	public function getPhone()
	{
		return $phone;
	}

	public function setAddress($address)
	{
		$this->address = $address;
	}

	public function getAddress()
	{
		return $address;
	}

	public function setGender($gender)
	{
		$this->gender = $gender;
	}

	public function getGender()
	{
		return $gender;
	}

	public function setBirth($birth)
	{
		$this->birth = $birth;
	}

	public function getBirth()
	{
		return $birth;
	}

}