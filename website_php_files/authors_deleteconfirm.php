
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>
<body>
<h1> Deleted Author </h1>


<?php
include "connection.php";

$authorNum = $_POST["authorNumber"];
$delete = "DELETE FROM author WHERE authorNum =  '" . $authorNum . "';";
$deleted = $mysqli->query($delete);

?>

Author deleted. Click <a href="authors.php">here</a> to return to the table.
<br><br>
