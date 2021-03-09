
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>
<body>
<h1> Deleted Write Record </h1>


<?php
include "connection.php";

$bookCode = $_POST["bookCode"];
$authorNum = $_POST["authorNum"];

$delete = "DELETE FROM wrote WHERE (bookCode =  '" . $bookCode . "') && (authorNum =  '" . $authorNum . "');";
$deleted = $mysqli->query($delete);

?>

Write Record deleted. Click <a href="wrote.php">here</a> to return to the table.
<br><br>
