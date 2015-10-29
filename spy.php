<?php

$mysqli = new mysqli('mysql.hostinger.es', 'u251939249_sergi', 'usersergi', 'u251939249_sergi');


 if(!$mysqli || $mysqli->errno){
 	die('Error connectig to database');
 }

$o = $_GET["o"];
$d = $_GET["d"];


$query = "Insert into visitas(origen,destino) values('$o','$d');";
$result = $mysqli-> query($query);


if($d == "DiarioIbiza"){
header("Location: http://www.diariodeibiza.es/");  
die('redirected');
}

else if($d == "ElTiempoIbiza"){
header("Location: http://www.eltiempo.es/ibiza.html");  
die('redirected');
}

else if($d == "Facebook"){
header("Location: https://www.facebook.com/");  
die('redirected');
}

else if($d == "SitesSaColomina"){
header("Location: https://sites.google.com/site/sacolominadaw1516/");  
die('redirected');
}

else if($d == "Hostinger"){
header("Location: http://www.hostinger.es/");  
die('redirected');
}

else if($d == "GitHub"){
header("Location: https://github.com/");  
die('redirected');
}


?>