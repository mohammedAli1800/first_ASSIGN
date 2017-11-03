<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<!-- the header of the assgn -->
<h1> Rgestration Form</h1>
<!-- if it there -->

    <form action="/login/register" method="post">
	<p><head>login</head></p>
	<label for="username">UserName:</label><input type="text" id="username" name="user" required="required"/></br>
	<label for="password">Password:</label><input type="text" id="password" name="pass" required="required" /></br></br>
		<label for="password">Password:</label><input type="text" id="password" name="pass2" required="required" /></br></br>
	<label for="email">email:</label><input type="text" id="email" name="email" required="required"/></br>
	
	
	<button type="submit" name="registe"> save</button>
	</form>
	</html>

    <?php require_once '../app/views/templates/footer.php' ?>
