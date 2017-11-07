<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<!-- the header of the assgn -->
<h1><font color= "green"> Rgestration Form</font></h1>
<!-- if it there -->
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
    <form action="/login/register" method="post">
	<p><head>login</head></p>
	<label for="username">UserName:</label><input type="text" id="username" name="user" required="required"/></br>
	<label for="password">Password:</label><input type="text" id="password" name="pass" required="required" /></br></br>
	<label for="email">email:</label><input type="text" id="email" name="email" required="required"/></br>
	
	
	<button type="submit" name="register"> save</button>
	</form>
	</html>

    <?php require_once '../app/views/templates/footer.php' ?>
