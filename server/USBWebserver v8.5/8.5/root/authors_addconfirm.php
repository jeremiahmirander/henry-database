
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Author Added </h1>


<?php
include "connection.php";

$authorNumber = $_POST["authorNumber"];
$authorLast = $_POST["authorLast"];
$authorFirst = $_POST["authorFirst"];
$add = "INSERT INTO author (authorNum, authorLast, authorFirst)
VALUES ('".$authorNumber."', '".$authorLast."', '".$authorFirst."');";
$added = $mysqli->query($add);



?>

Author added. Click Click <a href="authors.php">here</a> to return to the table.
<br><br>
