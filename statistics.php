<?php



$mysqli = new mysqli('mysql.hostinger.es', 'u251939249_sergi', 'usersergi', 'u251939249_sergi');
//$mysqli = new mysqli('localhost', 'root', '', 'users', 33060);

if(!$mysqli || $mysqli->errno){
 	die('Error connectig to database');
 }



$i=0;
$query = "SELECT * from visitas;";

$result = $mysqli-> query($query);
 while ($row= $result-> fetch_array(MYSQLI_BOTH) ){
 	$i++;
 }


$j=0;
$query1 = "SELECT * from visitas Where destino = 'www.diariodeibiza.es/';";

$ndiario = $mysqli-> query($query1);
 while ($row= $ndiario-> fetch_array(MYSQLI_BOTH) ){
 	$j++;
 }
 

$k=0;
$query2 = "SELECT * from visitas Where destino = 'www.eltiempo.es/ibiza.html';";
$ntiempo = $mysqli-> query($query2);
 while ($row= $ntiempo-> fetch_array(MYSQLI_BOTH) ){
 	$k++;
 }


 $l=0;
$query3 = "SELECT * from visitas Where destino = 'www.facebook.com/';";
$nface = $mysqli-> query($query3);
 while ($row= $nface-> fetch_array(MYSQLI_BOTH) ){
 	$l++;
 }



 $m=0;
$query4 = "SELECT * from visitas Where destino = 'sites.google.com/site/sacolominadaw1516/';";
$nsites = $mysqli-> query($query4);
 while ($row= $nsites-> fetch_array(MYSQLI_BOTH) ){
 	$m++;
 }


 $n=0;
$query5 = "SELECT * from visitas Where destino = 'www.hostinger.es/';";
$nhost = $mysqli-> query($query5);
 while ($row= $nhost-> fetch_array(MYSQLI_BOTH) ){
 	$n++;
 }


 $o=0;
$query6 = "SELECT * from visitas Where destino = 'github.com/';";
$ngit = $mysqli-> query($query6);
 while ($row= $ngit-> fetch_array(MYSQLI_BOTH) ){
 	$o++;
 }


?>




<!DOCTYPE>

<html>

<head>
	
	<meta charset="UTF-8">
    <title>PractiseLab4</title>
    <link href="Styles/bootstrap.min.css" rel="stylesheet">
    <script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <style type="text/css">
    
    body{
    padding-top: 30px;
    background-color:#48f;
    color:#000;
    }

    .jumbotron{
    background-color:#46e;
    text-align:center;
    }

    h3{
    color:#fff; margin:30px;
    padding-top:30px;
    padding-bottom:30px
    }

    .list-group-item {width:300px;
    text-align:center;
    font-size:20px;
    background-color:#aad;
    }

    a{
    color:#000;
    text-decoration:underline;
    }

    </style>

</head>




<body>

<div class = "container">


<div class="jumbotron">
        <h1>Statistics</h1>
      </div>

<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Statistics about visited links: </div>
		<div class="panel-body">
			<p>This is a table where we show a list of the links in the index page, followed by the visits it has had and the percentage of the total visits.
			   </p>
		</div>

		<!-- Table -->
		<table class="table">
			<thead>
				<tr>
					<th>Link clicked</th><th>Number of visits</th><th>% of total visits</th>
				</tr>

			</thead>

			<tbody>

				<tr>
					<td>Diario de Ibiza</td><td><?=$j?></td><td><?=100*($j/$i)?></td>
				</tr>

				<tr>
					<td>El tiempo Ibiza</td><td><?=$k?></td><td><?=100*($k/$i)?></td>
				</tr>

				<tr>
					<td>Facebook</td><td><?=$l?></td><td><?=100*($l/$i)?></td>
				</tr>

				<tr>
					<td>Sites Sa Colomina</td><td><?=$m?></td><td><?=100*($m/$i)?></td>
				</tr>
			
				<tr>
					<td>Hostinger</td><td><?=$n?></td><td><?=100*($n/$i)?></td>
				</tr>

				<tr>
					<td>GitHub</td><td><?=$o?></td><td><?=100*($o/$i)?></td>
				</tr>

				<tr>
					<th>Total of visits: </th><th><?=$i?></th>
				</tr>
				
			</tbody>
		</table>
</div>

</div>



</body>


</html>