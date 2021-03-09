
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<pre class="tab">
<h1> All Copies </h1>
<font size="4">
Click <a href="index.php">here</a> to return to the main page.<br>
Click <a href="list.php">here</a> to return to the list.<br>
</font>
</pre>

<table style="width:100%">
  <tr>
    <th>Book Code</th>
    <th>Branch Number</th> 
    <th>Copy Number</th>
	<th>Quality</th>
	<th>Price</th>
  </tr>
  
<?php

include "connection.php";


$copy = "SELECT bookCode, branchNum, copyNum, quality, price FROM copy";
$result = $mysqli->query($copy);
if($result-> num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row["bookCode"]. "</td>";
		echo "<td>" . $row["branchNum"]. "</td>";
		echo "<td>" . $row["copyNum"]. "</td>";
		echo "<td>". $row["quality"]. "</td>";
		echo "<td>" . $row["price"]. "</td>";
		echo "</tr>";
		//echo "Book Code: " . $row["bookCode"]. " - Branch Number: " . $row["branchNum"]. " - Copy Number: " . $row["copyNum"]. " - Quality: ". $row["quality"]. " - Price: " . $row["price"]. "<br>";
	}
}
echo "<br><br>";



?>

</table><br>
<pre class="tab">
<a href="copies_add.php">Add</a>
<a href="copies_edit.php">Edit</a>
<a href="copies_delete.php">Delete</a>
</pre>