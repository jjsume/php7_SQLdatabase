<?php
include('Database.php');

$server ='localhost';	//Database server name goes here! localhost:XXXX
$user='root';		//Database user name goes here!
$password='vieras';	//Database user's password
$database = 'oma';	//Database name goes here
$con = new Database($server,$user,$password,$database); //Now we create new Database-object.
?>
