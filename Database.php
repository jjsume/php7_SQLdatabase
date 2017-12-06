<?php
//Class for Database using.

class Database {

	//Attributes
	var $connection;
	var $server;
	var $user;
	var $password;
	var $database;

	//Constructor
	function __construct($server,$user,$password, $database) {
		$this->server = $server;
		$this->user = $user;
		$this->password =  $password;
		$this->database = $database;
		$this::createConnection($server,$user,$password,$database);	
	 }

	
	//Other methods
	//Next function creates a connection
	function createConnection($server,$user,$password,$database) {	


	try {
	
		$temp = $this->connection = new PDO("mysql:host=$server;dbname=$database", $user, $password);
    		// set the PDO error mode to exception
    		$temp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		echo "Connected successfully!\n";
    	}
	catch(PDOException $e)
    	{
    	echo "Connection failed: " . $e->getMessage();
    	}
	
	}

}

?>
