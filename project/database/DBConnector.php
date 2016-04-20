<?php

class DBConnector
{

	private $host;
	private $port;
	private $dbname;
	private $database;
	private $user;
	private $password;

	public function __construct($host, $port, $dbname, $database, $user, $password)
	{
		$this->setHost($host);
		$this->setPort($port);
		$this->setDBName($dbname);
		$this->setDatabase($database);
		$this->setUser($user);
		$this->setPassword($password);
	}

	public function setHost($host)
	{
		$this->host = $host;
	}

	public function getHost()
	{
		return $this->host;
	}

	public function setPort($port)
	{
		$this->port = $port;
	}

	public function getPort()
	{
		return $this->port;
	}

	public function setDBName($dbname)
	{
		$this->dbname = $dbname;
	}

	public function getDBName()
	{
		return $this->dbname;
	}

	public function setDatabase($database)
	{
		$this->database = $database;
	}

	public function getDatabase()
	{
		return $this->database;
	}

	public function setUser($user)
	{
		$this->user = $user;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getConnection()
	{	
		try {
		    return new PDO($this->getDatabase().':dbname='.$this->getDBName().';host='.$this->getHost(), $this->getUser(), $this->getPassword());
		} catch (PDOException $e) {
		    echo 'N&atilde;o foi poss&iacute;vel conectar.<br>Erro: ' . $e->getMessage();
		}
	}

}