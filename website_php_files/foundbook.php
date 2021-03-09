
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Find Books </h1>

Click <a href="findbook.php">here</a> to make another search.
Click <a href="index.php">here</a> to return to the main page.
<br><br>
<table style="width:100%">
  <tr>
    <th>Title</th>
    <th>Author Last Name</th> 
    <th>Author First Name</th>
	<th>Publisher Code</th>
	<th>Branch Name</th>
	<th>Available</th>
  </tr>

<?php
include "connection.php";

$keyword = $_POST["keyword"];

$find = "SELECT distinct sub.title, a.authorLast, a.authorFirst, p.publisherName, p.publisherCode, br.branchName, i.onHand
FROM (SELECT distinct title FROM book WHERE (title LIKE '%". $keyword ."%')) as sub, author a, book b, publisher p, wrote w, inventory i, branch br
WHERE (sub.title = b.title) && (b.bookCode = w.bookCode) && (w.authorNum = a.authorNum) && (b.publisherCode = p.publisherCode) && 
(i.bookCode = w.bookCode) && (i.branchNum = br.branchNum)";
$found = $mysqli->query($find);

if (!$found) {
    trigger_error('Invalid query: ' . $mysqli->error);
}


if($found-> num_rows > 0)
{
	while($row = $found->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row["title"]. "</td>";
		echo "<td>" . $row["authorLast"]. "</td>";
		echo "<td>" . $row["authorFirst"]. "</td>";
		echo "<td>". $row["publisherCode"]. "</td>";
		echo "<td>" . $row["branchName"]. "</td>";
		echo "<td>" . $row["onHand"]. "</td>";
		echo "</tr>";
		//echo "Title: " . $row["title"]. " - Author Last: " . $row["authorLast"]. " - Author First: " . $row["authorFirst"]. " = Publisher Name: ". $row["publisherCode"]. " - Branch Name: " . $row["branchName"]. " = Available: ". $row["onHand"]. "<br>";
	}
}

?>

</table>
