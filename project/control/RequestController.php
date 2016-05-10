<?php

include_once "model/Request.php";

class RequestController
{
	
	public function createRequest($protocol, $method, $uri, $ip)
	{
		return new Request(
			    $protocol,
				$method,
				$uri,
				$ip);
		
	}
	
}