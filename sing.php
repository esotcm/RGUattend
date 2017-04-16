<?php
include("database/DBConnect.php");
$studentID = $_POST["studentID"];
$sql = "INSERT INTO attending (studentID) VALUES ('$studentID')";
if(mysqli_query($conn, $sql)){
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}