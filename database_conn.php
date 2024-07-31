<?php // database_conn.php


$hostname = 'localhost'; // hostnames
$database_username = 'root'; // database usernames
$database_password = ''; // database passwords
$database_name = 'employer'; //database name

// connection to database
$db_connect = mysqli_connect($hostname, $database_username, $database_password, $database_name);

if(!$db_connect) {
   die('Could not connect to database:' .mysql_error());
} 