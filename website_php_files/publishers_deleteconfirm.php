
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>
<body>
<h1> Deleted Publisher </h1>


<?php
include "connection.php";

$publisherCode = $_POST["publisherCode"];
$delete = "DELETE FROM publisher WHERE publisherCode =  '" . $publisherCode . "';";
$deleted = $mysqli->query($delete);

?>

Publisher deleted. Click <a href="publishers.php">here</a> to return to the table.
<br><br>
