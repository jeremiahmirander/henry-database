
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<pre class="tab">
<h1> All Branches </h1>
<font size="4">
Click <a href="index.php">here</a> to return to the main page.<br>
Click <a href="list.php">here</a> to return to the list.<br>
</font>
</pre>

<table style="width:100%">
  <tr>
    <th>Branch Number</th>
    <th>Branch Name</th> 
    <th>Branch Location</th>
  </tr>
  
<?php

include "connection.php";


$branch = "SELECT branchNum, branchName, branchLocation FROM branch";
$result = $mysqli->query($branch);
if($result-> num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row["branchNum"]. "</td>";
		echo "<td>" . $row["branchName"]. "</td>";
		echo "<td>" . $row["branchLocation"]. "</td>";
		echo "</tr>";
		//echo "Branch Num: " . $row["branchNum"]. " - Branch Name: " . $row["branchName"]. " - Branch Location: " . $row["branchLocation"]. "<br>";
	}
}
echo "<br><br>";



?>

</table><br>
<pre class="tab">
<a href="branches_add.php">Add</a>
<a href="branches_edit.php">Edit</a>
<a href="branches_delete.php">Delete</a>
</pre>