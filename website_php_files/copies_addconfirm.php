
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Copy Added </h1>


<?php
include "connection.php";

$bookCode = $_POST["bookCode"];
$branchNum = $_POST["branchNum"];
$copyNum = $_POST["copyNum"];
$quality = $_POST["quality"];
$price = $_POST["price"];
$add = "INSERT INTO copy (bookCode, branchNum, copyNum, quality, price)
VALUES ('".$bookCode."', '".$branchNum."', '".$copyNum."', '".$quality."', '".$price."');";
$added = $mysqli->query($add);
echo $mysqli->error;



?>

Copy added. Click <a href="copies.php">here</a> to return to the table.
<br><br>
