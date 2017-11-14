<?php require_once '../app/views/templates/headerPublic.php' ?>
<html>
<!-- the header of the assgn -->
<h1><font color= "green"> Rgestration Form</font></h1>
<!-- if it there -->
    <form action="/login/register" method="post">
	<p><head>Rgestration</head></p>

        <div class="form-group">
      <label >Username</label>
      <input  placeholder="Enter your name" type="text" id="username" name="user">
    </div>
     <div class="form-group">
      <label> Password </label>
      <input class="form-control"  placeholder="Password" type="password" name="pass" >
    </div>
	<button type="submit" name="register"> save</button>
	</form>
	</html>

    <?php require_once '../app/views/templates/footerPublic.php' ?>
