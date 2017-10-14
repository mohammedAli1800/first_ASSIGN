<?php
session_start();
$_SESSION['message']=  'message';
  $_SESSION['username']= 'username';
try{
        $name =" ";
        $email = " ";
        $pass = " ";
        $pass2= " ";
    $db = mysqli_connect("localhost","root","","cosc");
    
    if(isset($_POST['registe'])){
    
    $name= ($_POST['user']);
    $email=($_POST['email']);
    $pass=($_POST['pass']);
    $pass2=($_POST['pass2']);
    
    if($pass == $pass2){
          $passwor = md5($pass);
          
          $sql = ("INSERT INTO users(username, password, email)
          values('$name','$pass','$email')");

          mysqli_query($db,$sql);
          $_SESSION['message']=  "Secussesful added";
          $_SESSION['username']=  $name;
          header("location:welcome.php");

      }
      else{
              $_SESSION['message']=  "the password do not match";  
      }
    
    
    
    }
    }
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    $connect = null;
    
   
  
?>
<html>
<!-- the header of the assgn -->
<h1> Rgestration Form</h1>
<!-- if it there -->

    <form action="rgestration.php" method="post">
	<p><head>login</head></p>
	<label for="username">UserName:</label><input type="text" id="username" name="user" required="required"/></br>
	<label for="password">Password:</label><input type="text" id="password" name="pass" required="required" /></br></br>
		<label for="password">Password:</label><input type="text" id="password" name="pass2" required="required" /></br></br>
	<label for="email">email:</label><input type="text" id="email" name="email" required="required"/></br>
	
	
	<button type="submit" name="registe"> save</button>
	</form>
	</html>