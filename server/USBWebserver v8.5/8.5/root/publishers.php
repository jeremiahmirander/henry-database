
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<pre class="tab">
<h1> All Publishers </h1>
<font size="4">
Click <a href="index.php">here</a> to return to the main page.<br>
Click <a href="list.php">here</a> to return to the list.<br>
</font>
</pre>

<table style="width:100%">
  <tr>
    <th>Publisher Code</th>
    <th>Publisher Name</th> 
    <th>City</th>

  </tr>
  
<?php

include "connection.php";


$publisher = "SELECT publisherCode, publisherName, city FROM publisher";
$result = $mysqli->query($publisher);
if($result-> num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row["publisherCode"]. "</td>";
		echo "<td>" . $row["publisherName"]. "</td>";
		echo "<td>" . $row["city"]. "</td>";
		echo "</tr>";
		//echo "Publisher Code: " . $row["publisherCode"]. " - Publisher Name: " . $row["publisherName"]. " - City: " . $row["city"]. "<br>";
	}
}
echo "<br><br>";



?>

</table><br>
<pre class="tab">
<a href="publishers_add.php">Add</a>
<a href="publishers_edit.php">Edit</a>
<a href="publishers_delete.php">Delete</a>
</pre>