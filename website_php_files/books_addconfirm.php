
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Book Added </h1>


<?php
include "connection.php";

$bookCode = $_POST["bookCode"];
$title = $_POST["title"];
$publisherCode = $_POST["publisherCode"];
$type = $_POST["type"];
$paperback = $_POST["paperback"];

$add = "INSERT INTO book (bookCode, title, publisherCode, type, paperback)
VALUES ('".$bookCode."', '".$title."', '".$publisherCode."', '".$type."' , '".$paperback."');";
$added = $mysqli->query($add);



?>

Book added. Click Click <a href="books.php">here</a> to return to the table.
<br><br>
