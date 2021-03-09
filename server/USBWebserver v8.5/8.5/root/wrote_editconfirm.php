
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Write Record Edited </h1>

<?php
include "connection.php";

$bookCode = $_POST["bookCode"];
$authorNum = $_POST["authorNum"];
$sequence = $_POST["sequence"];

$update = "UPDATE wrote SET bookCode ='".$bookCode."', authorNum ='".$authorNum."', sequence ='".$sequence."'
WHERE (bookCode = '" . $bookCode ."') && (authorNum = '" . $authorNum ."');";
$updated = $mysqli->query($update);
echo $mysqli->error;

?>

Write Record updated. Click <a href="wrote.php">here</a> to return to the table.
<br><br>
