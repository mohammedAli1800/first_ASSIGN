<?php
 session_start();
 if(isset($_GET['logout'])){
    if($_GET['logout']==true){
        $_SESSION['logged'] = false;
        session_destroy();
        echo "logged out";
 }
}
if(isset($_SESSION["logged"])){
    if($_SESSION["logged"]==true){
    header("Location: welcome.php");
    die();
    }
}

?>

<html>
<!-- the header of the assgn -->
<h1> welcome to My First Web Page</h1>
<!-- if it there -->

    <form action="loginHandler.php" method="post">
	<p><head>login</head></p>
	<label for="username">UserName:</label><input type="text" id="username" name="usr" required="required"/></br>
	<label for="password">Password:</label><input type="text" id="password" name="pass" required="required" /></br></br>
	<button type="submit"> login</button>
	</form>

<?php
    if(isset($_POST['attempt'])){
        if(isset($_SESSION['failed'])){
            echo " <a> you tried " . $_SESSION['failed'] . " time/s to login </a>";
        }else{
        echo "no storred attempts";
        }
    }
?>
<form method="POST" action=''>
<input type="submit" name="attempt"  value="attempts">
</form>
</html>

      