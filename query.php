<html>
<head>
</head>
<body>

<?php
session_start();
include ("Database/DBConnect.php");
if($_POST["ID"]){
    echo "<p>". $_GET["ID"]. "</p>";
}
?>

</body>
</html>