<?php

class Connection{

	protected $pdo;
	
	public function __construct($host, $dbName, $dbUser, $dbPass){
		$dsn = "mysql:dbname=" . $dbName . ";host=" . $host;
		try {
			$this->pdo = new PDO($dsn, $dbUser, $dbPass);
		} catch (PDOException $e) {
			echo "Ocorreu um erro! <br> Error: ".$e->getMessage();
		}
	}

}