<?php
$severname = 'localhost:3306';
$username = 'federicoAdmin';
$password = 'calichesan';
print ("algo");
$conn = new msql_connect('localhost', 'federicoAdmin', 'calichesan');
print ("algo");
if (!$conn)
	{
		print("connection failed".mysql_error());
	}
print ("Connected succesfully");
?>