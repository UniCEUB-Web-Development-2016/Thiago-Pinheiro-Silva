<?php

class Request
{

	private $protocol;
	private $method;
	private $ip;
	private $resource;
	private $parameters;
	
	function __construct($protocol, $method, $uri, $ip)
	{
		$this->setProtocol($protocol);
		$this->setMethod($method);
		$array = explode('?', $uri);
		$this->setResource(explode('/', $array[0]));
		$this->setParameters($array[1]);
		$this->setIp($ip);
	}

	function setMethod($method)
	{
		$this->method = $method;
	}

	function getMethod()
	{
		return $this->method;
	}

	function setProtocol($protocol)
	{
		$this->protocol = $protocol;
	}

	function getProtocol()
	{
		return $this->protocol;
	}

	function setIp($ip)
	{
		$this->ip = $ip;
	}

	function getIp()
	{
		return $this->ip;
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

}
