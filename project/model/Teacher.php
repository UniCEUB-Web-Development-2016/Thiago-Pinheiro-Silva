<?php

class Teacher extends User
{

	private $subject;
	private $degree;
	private $since;

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