<?php

include 'util/Router.php';
echo json_encode(new Router());
//include 'lib/Request.php';
//echo json_encode((new Request()));

//include 'database/DBConnector.php';

/*
// Testando request

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
echo "Parameters: {".(chop($parameters, ", "))."}";*/


// Testando conexão de banco por PDO

/*$db = new DBConnector('localhost', '3306', 'plantas', 'mysql', 'root', 'root');
$con = $db->getConnection();

$rs = $con->query('SELECT * FROM tb_especie');
while($row = $rs->fetch(PDO::FETCH_OBJ)){
	var_dump($row); 
}*/
