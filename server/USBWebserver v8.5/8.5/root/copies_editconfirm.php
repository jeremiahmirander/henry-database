
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Copy Edited </h1>

<?php
include "connection.php";

$bookCode = $_POST["bookCode"];
$branchNum = $_POST["branchNum"];
$copyNum = $_POST["copyNum"];
$quality = $_POST["quality"];
$price = $_POST["price"];

$update = "UPDATE copy SET bookCode ='".$bookCode."', branchNum ='".$branchNum."', copyNum ='".$copyNum."', quality ='".$quality."', price ='".$price."'
WHERE (branchNum = " . $branchNum .") && (bookCode = " . $bookCode .") && (copyNum = " . $copyNum .") ;";
$updated = $mysqli->query($update);
echo $mysqli->error;

?>

Copy updated. Click <a href="copies.php">here</a> to return to the table.
<br><br>
