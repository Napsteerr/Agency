<?php


class config
{public $cnx;
function __construct()
{
$servername = "localhost";
$username = "root";
$password = "";
$database= "ar";
$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$this->cnx=$conn;

}

}
?>