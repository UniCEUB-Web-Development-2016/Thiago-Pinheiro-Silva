<?php

include "control/ControlManager.php";

class Router
{
	
	public function __construct()
	{
     	return (new ControlManager)->getResource();		
	}

}