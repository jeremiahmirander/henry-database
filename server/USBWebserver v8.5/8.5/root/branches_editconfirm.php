
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Branch Edited </h1>

<?php
include "connection.php";

$branchNum = $_POST["branchNumber"];
$branchName = $_POST["branchName"];
$branchLocation = $_POST["location"];

$update = "UPDATE branch SET branchNum ='".$branchNum."', branchName ='".$branchName."', branchLocation ='".$branchLocation."'
WHERE branchNum = " . $branchNum .";";
$updated = $mysqli->query($update);
echo $mysqli->error;

?>

Branch updated. Click <a href="branches.php">here</a> to return to the table.
<br><br>
