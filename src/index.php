<!DOCTYPE HTML>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="script.js"></script>
		<title>Pythagorean Tree</title>
	</head>
	<body>
		<h1>
			Pythagorean Tree
		</h1>
		<h3>Move the mouse over the canvas to animate</h3>

 <?php 

$http_client_ip = '';
if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $http_client_ip = $_SERVER['HTTP_CLIENT_IP']; }
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR']; }
if (!empty($_SERVER['REMOTE_ADDR'])) { $remote_addr = $_SERVER['REMOTE_ADDR']; }
$localIP = getHostByName(getHostName());
$localHostName = getHostName();

echo "HTTP_CLIENT_IP: $http_client_ip<br>";
echo "HTTP_X_FORWARDED_FOR: $http_x_forwarded_for<br>";
echo "REMOTE_ADDR: $remote_addr<br>";
echo "getHostByName(): $localIP<br>";
echo "getHostName(): $localHostName<br>";
?> 

		<form id="limitForm">
			<input type="button" value="Reset" id ="limitButton">
		</form>
		<canvas id="canvas" width="1400" height="600"></canvas>
	</body>
</html>
