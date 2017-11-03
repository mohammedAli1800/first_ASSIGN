<?php require_once '../app/views/templates/headerPublic.php' ?>


    <html>
    <!-- the header of the assgn -->
    <p><font color="red">welcome to My First Web Page</font></p>
    <head>
    <style>
    body {
        background-color: lightblue;
    }
    </style>
    </head>
    <!-- if it there -->

        <form action="/login/index" method="post">
    	<p><head>login</head></p>
    	
    	<label for="username">UserName:</label><input type="text" id="username" name="user" required="required"/></br>
    	<label for="password">Password:</label><input type="text" id="password" name="pass" required="required" /></br></br>
    	 <p><a href='/login/register'>sing up here</a>
    	<button type="submit"> login</button>
    	
    	</form>
    </div>
</html>
    <?php require_once '../app/views/templates/footer.php' ?>
