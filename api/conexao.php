<?php

$host = "";
$user = "";
$pass = "";
$dbname = "";
$port = "";

//Conexão com a porta
$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

//Conexão sem a porta
//$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
