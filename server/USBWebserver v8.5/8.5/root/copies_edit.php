
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Edit a Copy </h1>

Enter the Book Code, Branch Number, and Copy Number for the author you want to edit and enter new values.<br>


<div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"> Edit <span></span></h4>
                <div class="form">
                <form action="copies_editconfirm.php" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" required="" placeholder="Book Code" value="" name="bookCode" class="txt"><br>
                    <input type="text" required="" placeholder="Branch Number" value="" name="branchNum" class="txt"><br>
                    <input type="text" required="" placeholder="Copy Number" value="" name="copyNum" class="txt"><br>
					<input type="text" required="" placeholder="Quality" value="" name="quality" class="txt"><br>
					<input type="text" required="" placeholder="Price" value="" name="price" class="txt"><br>
                     <input type="submit" value="submit" name="submit" class="txt2"><br>
                </form>
            </div>
            </div>
            </div>
	</div>
</div>

Click <a href="copies.php">here</a> to go back to the table.
Click <a href="index.php">here</a> to return to the main page.