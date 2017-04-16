<?php
include("database/DB_Connect.php");
$_studentID = $_POST["studentID"];
$sql = "INSERT INTO attending (studentID) VALUES ('$_studentID')";
if(mysqli_query($conn, $sql)){
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}