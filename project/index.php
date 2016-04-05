<?php

include 'lib/Request.php';

$request = new Request();

echo "Resource: ".$request->getResource()."<br>";
$parameters = "";
foreach ($request->getParameters() as $parameter) {
	foreach ($parameter as $key => $value) {
		$parameters .= $key.': '.$value;
	}
	$parameters .= ", ";
}
echo "Parameters: {".(chop($parameters, ", "))."}";