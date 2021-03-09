
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Publisher Added </h1>


<?php
include "connection.php";

$publisherCode = $_POST["publisherCode"];
$publisherName = $_POST["publisherName"];
$city = $_POST["city"];
$add = "INSERT INTO publisher (publisherCode, publisherName, city)
VALUES ('".$publisherCode."', '".$publisherName."', '".$city."');";
$added = $mysqli->query($add);
echo $mysqli->error;



?>

Publisher added. Click Click <a href="publishers.php">here</a> to return to the table.
<br><br>
