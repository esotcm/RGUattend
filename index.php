<!doctype html>
<html amp lang="en">
<head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title>Hello, AMPs</title>
    <link rel="canonical" href="http://example.ampproject.org/article-metadata.html" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>
    <style amp-custom>
        /* any custom style goes here */
        body {
            background-color: purple;
        }
        amp-img {
            background-color: gray;
            border: 1px solid black;
        }
    </style>
    <img src="welcome.jpg" height="56" width="261"/>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
</head>
<body>
<h1>Welcome to the mobile web</h1>
<amp-img src="welcome.jpg" alt="Welcome" height="200" width="400"></amp-img>
<?php
session_start();
include ("Database/DB_Connect.php");

            $sql = "SELECT * FROM CM3028";
            $result = $conn->query($sql);
while($row = $result->fetch_array()) {
$studentID = $row['studentID'];
$student_name = $row['student_name'];
$attendance = $row['attendance'];
echo "<ul class='a'>
    <li><a href='index.php/?ID={$studentID}'>{$student_Name}</a> Attendance: {$attendance}. </li>
</ul>";
}

?>
</body>
</html>