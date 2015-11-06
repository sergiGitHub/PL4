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
		.list-group-item {
		width:300px;
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
						<?php
						$mysqli = new mysqli('mysql.hostinger.es', 'u251939249_sergi', 'usersergi', 'u251939249_sergi');
						//$mysqli = new mysqli('localhost', 'root', '', 'users', 33060);
						if(!$mysqli || $mysqli->errno){
						die('Error connectig to database');
						}
						$queryM = " SELECT destino, COUNT(*) as visitadas, COUNT(*)*100/(SELECT COUNT(*) FROM visitas)
						as porcentaje FROM visitas GROUP BY origen,destino;";
						$totalvis=0;
						$result1 = $mysqli-> query($queryM);
						while ($row = $result1-> fetch_array(MYSQLI_BOTH) ){
							echo "<tr>";
										$des = $row["destino"];
										echo "<td>".$des."</td>";
										$vi = $row["visitadas"];
										echo "<td>".$vi."</td>";
										$por = $row["porcentaje"];
										echo "<td>".$por."</td>";
							echo "</tr>";
						$totalvis += $vi;
						}
						echo "<tr><td>Total visits: </td><td>".$totalvis."</td></tr>";
						?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>