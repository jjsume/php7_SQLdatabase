<?php
include('Database.php');

$server ='localhost';	//Database server name goes here! localhost:XXXX
$user='root';		//Database user name goes here!
$password='password';	//Database user's password
$database = 'userDB';	//Database name goes here
$con = new Database($server,$user,$password,$database); //Now we create new Database-object.
$conB = $con->connection;	//Now $conB refers to the PDO-object stored at the memory

/* 
 * Next few examples are for MySQL-use
 *
 * $query("INSERT INTO User(fName,lName,SSN) VALUES('John','Doe','061217-6667');";
 * $conB->exec($query);	//Actually this one calls PDO-Connection Object method '. 
 */
		

?>
