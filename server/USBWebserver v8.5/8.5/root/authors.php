
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<pre class="tab">
<h1> All Authors </h1>
<font size="4">
Click <a href="index.php">here</a> to return to the main page.<br>
Click <a href="list.php">here</a> to return to the list.<br>
</font>
</pre>

<table style="width:100%">
  <tr>
    <th>Author Number</th>
    <th>Author's Last Name</th> 
    <th>Author's First Name</th>
  </tr>

<?php

include "connection.php";


$author = "SELECT authorNum, authorLast, authorFirst FROM author";
$result = $mysqli->query($author);
if($result-> num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row["authorNum"]. "</td>";
		echo "<td>" . $row["authorLast"]. "</td>";
		echo "<td>" . $row["authorFirst"]. "</td>";
		echo "</tr>";
		//echo "Author Number: " . $row["authorNum"]. " - Author Last: " . $row["authorLast"]. " - Author First: " . $row["authorFirst"]. "<br>";
	}
}
echo "<br><br>";

?>

</table><br>
<pre class="tab">
<a href="authors_add.php">Add</a>
<a href="authors_edit.php">Edit</a>
<a href="authors_delete.php">Delete</a>
</pre>