
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>
<body>
<h1> Deleted Copy </h1>


<?php
include "connection.php";

$bookCode = $_POST["bookCode"];
$branchNum = $_POST["branchNum"];
$copyNum = $_POST["copyNum"];

$delete = "DELETE FROM copy WHERE (bookCode =  '" . $bookCode . "') && (branchNum =  '" . $branchNum . "') && (copyNum =  '" . $copyNum . "');";
$deleted = $mysqli->query($delete);

?>

Copy deleted. Click <a href="copies.php">here</a> to return to the table.
<br><br>
