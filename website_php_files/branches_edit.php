
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Edit a Branch </h1>

Enter the Branch Number for the branch you want to edit and enter new values.<br>

<div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"> Edit <span></span></h4>
                <div class="form">
                <form action="branches_editconfirm.php" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" required="" placeholder="Branch Number" value="" name="branchNumber" class="txt"><br>
                    <input type="text" required="" placeholder="Branch Name" value="" name="branchName" class="txt"><br>
                    <input type="text" required="" placeholder="Location" value="" name="location" class="txt"><br>
                     <input type="submit" value="submit" name="submit" class="txt2"><br>
                </form>
            </div>
            </div>
            </div>
	</div>
</div>

Click <a href="branches.php">here</a> to go back to the table.
Click <a href="index.php">here</a> to return to the main page.