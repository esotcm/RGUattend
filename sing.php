<?php
include("database/DBConnect.php");
$_studentID = $_GET["studentID"];
$sql = "INSERT INTO attending (studentID) VALUES ('$_studentID')";
if(mysqli_query($conn, $sql)){
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}