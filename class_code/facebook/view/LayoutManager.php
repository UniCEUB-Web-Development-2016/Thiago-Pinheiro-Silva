<?php

class LayoutManager
{

	private $folder;
	private $file;

	public function __construct()
	{
		$c = (is_null($_GET['c']))?'index':$_GET['c'];
		$a = (is_null($_GET['a']))?'index':$_GET['a'];
		$this->setFolder($c);
		$this->setFile($a);
		echo "<script>".file_get_contents('http://localhost/Thiago-Pinheiro-Silva/class_code/facebook/view/'.$this->getFolder().'/'.$this->getFile().'.js')."</script>";
	}

	public function getFolder()
	{
		return $this->folder;
	}

	public function setFolder($folder)
	{
		$this->folder = $folder;
	}

	public function getFile()
	{
		return $this->file;
	}

	public function setFile($file)
	{
		$this->file = $file;
	}

	/*public function start()
	{
		include 'UserRegister.php';
	}*/

}