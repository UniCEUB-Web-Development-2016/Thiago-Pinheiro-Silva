<?php

class School
{

	private $name;
	private $address;
	private $since;

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $name;
	}

	public function setAddress($address)
	{
		$this->address = $address;
	}

	public function getAddress()
	{
		return $address;
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