<?php

$serverName = "eu-cdbr-azure-west-d.cloudapp.net";
$DB_name = "b50e4e852f567b";
$DB_password = "434b386b";
$DB = "attendants";
//attempting to connect to the database
$conn = new mysqli($serverName, $DB_name, $DB_password, $DB);
//Letting the user know if the connection didnt work
if($conn->connect_error){
    die('ConnectFailed['.$conn->connect_error.']');
}else {
}