<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<main>
    <?php
session_start();
include ("database/DBconnect.php");
?>
                    <form action="sing.php" method="post">
                        <input type="text" name="studentID" placeholder="studentID"><br>
                    </form>
                </main>
</body>
</html>