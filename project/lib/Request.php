<?php

class Request
{

	private $resource;
	private $parameters;
	
	function __construct()
	{
		$this->setRequest();
	}

	function setRequest()
	{
		$array = explode('?', $this->getURI());
		$this->setResource(explode('/', $array[0]));
		$this->setParameters($array[1]);
	}

	function setResource($resource)
	{
		$this->resource = chop(end($resource), '.php');
	}

	function getResource()
	{
		return $this->resource;
	}

	function setParameters($parameters)
	{
		$tuples = explode('&', $parameters);
		$array = array();
		foreach ($tuples as $tuple) {
			$array_in = explode('=',$tuple);
			array_push($array, array($array_in[0] => $array_in[1]));
		}
		$this->parameters = $array;
	}

	function getParameters()
	{
		return $this->parameters;
	}

	function getUri()
	{
		return $_SERVER["REQUEST_URI"];
	}

}
