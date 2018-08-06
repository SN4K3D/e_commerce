<?php

class DB
{
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'e_commerce';
	public $bdd;

	
	public function __construct($host = null, $username = null, $password = null, $database = null)
	{
		if($host != null)
		{
			$this->host = $host;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;
		}
		$this->bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->database.';charset=utf8', $this->username, $this->password);
	}

	public function query($sql, $data = array())
	{
		$req = $this->bdd->prepare($sql);
		$req->execute($data);
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
}

?>