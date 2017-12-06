<?php
/* Class for Database using.
 *
 * When new Database instace will be created, there's a createConnection-method
 * called from the constructor.
 */

class Database {

	//Attributes
	var $connection;
	var $server;
	var $user;
	var $password;
	var $database;

	/* Constructor
	 * 
 	 * There's four input parameters given when 'new' keyword is used.
    	 */
	function __construct($server,$user,$password, $database) {
		$this->server = $server;
		$this->user = $user;
		$this->password =  $password;
		$this->database = $database;
		//Let's call createConnection function defined later in this class.
		$this::createConnection($server,$user,$password,$database);	
	 }

	
	//Other methods
	//Next function creates a connection (PDO solution)
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

	/*__destruct method is activated when garbage collector is activated.
	 * (Object is died itself, killed by someone, or there's no more references pointing 
	 * to the object at the memory.)
	 */

	function __destruct() {
	//In the PDO solution closing database happens by setting active PDO-connection-object as 'null'.
		$this->connection = null;	 
		echo "Connection to database is closed!";
	}
}

?>
