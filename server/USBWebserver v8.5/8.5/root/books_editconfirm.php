
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Edited Book </h1>

<?php
include "connection.php";

$bookCode = $_POST["bookCode"];
$title = $_POST["title"];
$publisherCode = $_POST["publisherCode"];
$type = $_POST["type"];
$paperback = $_POST["paperback"];

$update = "UPDATE book SET bookCode ='".$bookCode."', title ='".$title."', publisherCode ='".$publisherCode."', type ='".$type."' , paperback ='".$paperback."' 
WHERE bookCode = " . $bookCode .";";
$updated = $mysqli->query($update);


?>

Book updated. Click Click <a href="books.php">here</a> to return to the table.
<br><br>
