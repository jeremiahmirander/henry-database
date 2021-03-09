
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<pre class="tab">
<h1> All Books </h1>
<font size="4">
Click <a href="index.php">here</a> to return to the main page.<br>
Click <a href="list.php">here</a> to return to the list.<br>
</font>
</pre>

<table style="width:100%">
  <tr>
    <th>Book Code</th>
    <th>Title</th> 
    <th>Publisher Code</th>
	<th>Type</th>
	<th>Paper Back</th>
  </tr>
  
<?php

include "connection.php";


$book = "SELECT bookCode, title, publisherCode, type, paperback FROM book";
$result = $mysqli->query($book);
if($result-> num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row["bookCode"]. "</td>";
		echo "<td>" . $row["title"]. "</td>";
		echo "<td>" . $row["publisherCode"]. "</td>";
		echo "<td>". $row["type"]. "</td>";
		echo "<td>" . $row["paperback"]. "</td>";
		echo "</tr>";
	}
}
echo "<br></table><br><br>";


// "Book Code: " . $row["bookCode"]. " - Title: " . $row["title"]. " - Publisher Code: " . $row["publisherCode"]. " = Type: ". $row["type"]. " - Paperback: " . $row["type"]. "<br>";
?>


</table><br>
<pre class="tab">
<a href="books_add.php">Add</a>
<a href="books_edit.php">Edit</a>
<a href="books_delete.php">Delete</a>
</pre>