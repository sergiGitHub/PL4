<?php

//$mysqli = new mysqli('mysql.hostinger.es', 'u251939249_sergi', 'usersergi', 'u251939249_sergi');
$mysqli = new mysqli('localhost', 'root', '', 'users', 33060);

 if(!$mysqli || $mysqli->errno){
 	die('Error connectig to database');
 }

$o = $_GET["o"];
$d = $_GET["d"];


$query = "Insert into visitas(origen,destino) values('$o','$d');";
$result = $mysqli-> query($query);


header("Location: http://$d");  
die('redirected');



?>