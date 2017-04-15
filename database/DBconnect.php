<?php

$serverName = "
rguattend.database.windows.net";
$DB_name = "paulius";
$DB_password = "Admin20k";
$DB = "RGUattend";
//attempting to connect to the database
$conn = new mysqli($serverName, $DB_name, $DB_password, $DB);
//Letting the user know if the connection didnt work
if($conn->connect_error){
    die('ConnectFailed['.$conn->connect_error.']');
}else {
}