
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<pre class="tab">
<h1> All Wrote </h1>
<font size="4">
Click <a href="index.php">here</a> to return to the main page.<br>
Click <a href="list.php">here</a> to return to the list.<br>
</font>
</pre>

<table style="width:100%">
  <tr>
    <th>Book Code</th>
    <th>Author Number</th> 
    <th>Sequence</th>
  </tr>
  
<?php

include "connection.php";


$wrote = "SELECT bookCode, authorNum, sequence FROM wrote";
$result = $mysqli->query($wrote);
if($result-> num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row["bookCode"]. "</td>";
		echo "<td>" . $row["authorNum"]. "</td>";
		echo "<td>" . $row["sequence"]. "</td>";
		echo "</tr>";
		//echo "Book Code: " . $row["bookCode"]. " - Author Number: " . $row["authorNum"]. " - Sequence: " . $row["sequence"]. "<br>";
	}
}
echo "<br><br>";

?>

</table><br>
<pre class="tab">
<a href="wrote_add.php">Add</a>
<a href="wrote_edit.php">Edit</a>
<a href="wrote_delete.php">Delete</a>
</pre>