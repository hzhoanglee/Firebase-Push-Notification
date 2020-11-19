<?php
$servername = "localhost"; //mostly localhost or use the host name
$username = "###"; //database username
$password = "###"; //database password
$dbname = "###";
$conn = new PDO("mysql:host=$servername;$dbname", $username, $password);

//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
define('API_ACCESS_KEY', 'InsertKeyHere'); //Get key here - https://console.firebase.google.com/project/{project_name}/settings/cloudmessaging

//just left it here
$done = 0;
$total = 0;