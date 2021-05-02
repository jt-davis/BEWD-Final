<?php
/* Database info. */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'reclaiming_the_grain');
 
/* Tries to connect to the database. */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Gives error if it doesn't connect.
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>