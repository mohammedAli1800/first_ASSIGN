<?php require_once '../app/views/templates/headerPublic.php' ?>

<!DOCTYPE html>
    <html>
    <!-- the header of the assgn -->
    <p><font color="red">welcome to My First Web Page</font></p>
    <head>
            
    <style>
    body {
        background-color: lightblue;
    }
    form {
        border: 3px solid #f1f1f1;
    }
    input[type=text], input[type=password] {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 30%;
    }
    
    </style>
    </head>
    <!-- if it there -->

        <form action="/login/index" method="post">
    	<p><head>login</head></p>
    	
    	<label for="username">UserName:</label><input type="text"placeholder="Enter your name" id="username" name="user" required="required"/></br>
    
    	<label for="password">Password : </label><input type="text"placeholder="Enter Password" id="password" name="pass" required="required" /></br></br>
    	 <p><a href='/login/register'>sing up here</a>
    	<button type="submit" name="login"> login</button>
    	
    	</form>
    </div>

    <?php require_once '../app/views/templates/footer.php' ?>
</html>