
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Write Record Added </h1>


<?php
include "connection.php";

$bookCode = $_POST["bookCode"];
$authorNum = $_POST["authorNum"];
$sequence = $_POST["sequence"];
$add = "INSERT INTO wrote (bookCode, authorNum, sequence)
VALUES ('".$bookCode."', '".$authorNum."', '".$sequence."');";
$added = $mysqli->query($add);
echo $mysqli->error;



?>

Write Record added. Click Click <a href="wrote.php">here</a> to return to the table.
<br><br>
