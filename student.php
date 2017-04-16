<?php
/**
 * Created by PhpStorm.
 * User: duncanpogson
 * Date: 05/12/2016
 * Time: 20:14
 */
session_start();
include ("Database/LoginSystem/DB_Connect.php");
if (isset($_GET['ID'])) {
//    echo $_GET['ID'];
    $_selected_student = $_GET['ID'];
}else{
    // Fallback behaviour
    echo "Uh Oh, this club seems to be missing, please go back and pick another club.";
}
$sql = "SELECT * FROM CM3028 where studentID ='" . $_selected_student . "'";
$result = $conn->query($sql);
while($row = $result->fetch_array())
{
    $_studentID = $row['studentID'];
    $_student_name = $row['student_name'];
    $_attending = $row['attending'];
    echo "
        <article>
            Title: {$_studentID} \n
            Genre: {$_student_name} \n
            Contact Us: \n
            Attending: {$_attending} \n
        </article>";
}

