
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Author Book </h1>

<?php
include "connection.php";

$authorNum = $_POST["authorNumber"];
$authorLast = $_POST["authorLast"];
$authorFirst = $_POST["authorFirst"];

$update = "UPDATE author SET authorNum ='".$authorNum."', authorLast ='".$authorLast."', authorFirst ='".$authorFirst."'
WHERE authorNum = " . $authorNum .";";
$updated = $mysqli->query($update);
echo $mysqli->error;

?>

Author updated. Click <a href="authors.php">here</a> to return to the table.
<br><br>
