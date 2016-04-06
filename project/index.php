<?php

include 'lib/Request.php';

$request = new Request();

echo "Method: ".$request->getMethod()."<br>";
echo "Protocol: ".$request->getProtocol()."<br>";
echo "IP: ".$request->getIp()."<br>";
echo "Resource: ".$request->getResource()."<br>";
$parameters = "";
foreach ($request->getParameters() as $parameter) {
	foreach ($parameter as $key => $value) {
		$parameters .= $key.': '.$value;
	}
	$parameters .= ", ";
}
echo "Parameters: {".(chop($parameters, ", "))."}";