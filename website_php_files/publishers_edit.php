
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body style="background-color:powderblue;">
</head>

<body>
<h1> Edit a Publisher </h1>

Enter the Pubilsher Code for the publisher you want to edit and enter new values.<br>


<div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"> Edit <span></span></h4>
                <div class="form">
                <form action="publishers_editconfirm.php" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" required="" placeholder="Publisher Code" value="" name="publisherCode" class="txt"><br>
                    <input type="text" required="" placeholder="Publisher Name" value="" name="publisherName" class="txt"><br>
                    <input type="text" required="" placeholder="City" value="" name="city" class="txt"><br>
                     <input type="submit" value="submit" name="submit" class="txt2"><br>
                </form>
            </div>
            </div>
            </div>
	</div>
</div>

Click <a href="publishers.php">here</a> to go back to the table.
Click <a href="index.php">here</a> to return to the main page.