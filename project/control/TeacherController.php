<?php

class Teacher extends User
{

	private $subject;
	private $degree;
	private $since;

	public function __construct($username, $password, $name, $email, $phone, $address, $gender, $birth, $subject, $degree, $since)
	{
		$this->setUsername($username);
		$this->setPassword($password);
		$this->setName($name);
		$this->setEmail($email);
		$this->setPhone($phone);
		$this->setAddress($address);
		$this->setGender($gender);
		$this->setBirth($birth);
		$this->setSubject($subject);
		$this->setDegree($degree);
		$this->setSince($since);
	}

	public function setSubject($subject)
	{
		$this->subject = $subject;
	}

	public function getSubject()
	{
		return $subject;
	}

	public function setDegre($degree)
	{
		$this->degree = $degree;
	}

	public function getDegre()
	{
		return $degree;
	}

	public function setSince($since)
	{
		$this->since = $since;
	}

	public function getSince()
	{
		return $since;
	}

}