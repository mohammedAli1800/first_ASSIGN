<?php require_once '../app/views/templates/headerPublic.php' ?>
    <html>
    <!-- the header of the assgn -->
    <p><font color="red">welcome to My First Web Page</font></p>
    <head>
    </head>
    <!-- if it there -->

        <form action="/login/index" method="post">
    	<head>login</head>
    	
    	
        <div class="form-group">
      <label >Username</label>
      <input  placeholder="Enter your name" type="text" id="username" name="user">
    </div>
     <div class="form-group">
      <label>Password </label>
      <input class="form-control"  placeholder="Enter your Password" type="password" name="pass" >
    </div>


    	<a href='/login/register'><button type="submit" class="btn btn-primary" > sing up</button></a>
    	<button type="submit" class="btn btn-primary" name="login"> login</button>
    </form>	
      </html>

    <?php require_once '../app/views/templates/footerPublic.php' ?>

