<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <![endif]-->
</head>
<body>
<img src="welcome.jpg">
<div class="container">
    <div class="row">
        <h1 class="dark"> WELCOME TO CM3028</h1>
        <div class="col-md-5">
            <h2 class="green">signed in</h2>
            <?php
            session_start();
            include ("Database/DBConnect.php");

            $sql = "SELECT * FROM attendees";
            $result = $conn->query($sql);
            while($row = $result->fetch_array()) {
                $studentID = $row['studentID'];
                $student_Name = $row['student_Name'];

                echo

                "<ul><li> {$studentID} {$student_Name} </ul></li>"

                ;
            }

            ?>
        </div>
        <div class="col-md-5">
            <h2 class="red">students</h2>
            <?php

            $sql = "SELECT * FROM cm3028";
            $result = $conn->query($sql);
            while($row = $result->fetch_array()) {
                $studentID = $row['studentID'];
                $Student_Name = $row['Student_Name'];

                echo

                "<ul><li> {$studentID} {$Student_Name}  </li>
                </ul>"
                ;
            }

            ?>
        </div>
        <div class="col-md-2">
            <h2 class="dark">Attendance:
              <?php
                $sql = "SELECT COUNT(*) FROM students";
                $result = $conn->query($sql);
                while($row = $result->fetch_array()){
                    $noobs = $row['noobs']
                    echo "<ul>{$noobs}</ul>";
                }


               ?>
            </h2>
        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>