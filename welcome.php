<?php
session_start();
$db = mysqli_connect("localhost","root","","cosc");


if(isset($_SESSION["logged"])){
        $name= ($_POST['user']);
        $pass=($_POST['pass']);
        $pass=md5($pass);
        $sql="SELECT * FROM users WHERE username='$name' AND password='$pass'";
            $result=mysqli_query($db,$sql);
        if(mysqli_connect($result)==1){
        $_SESSION['message']=  "Secussesful added";
         $_SESSION['username']=  $name;
    header("Location: welcome.php");
    
    }
    else{
            $_SESSION['message']=  "incorrect usernamee and password";  

    }
    }
?>
<!DOCTYPE html>
<html>
<h1>Welcome back </h1>
<div>
<?php
	if(isset($_SESSION['message'])){
		echo "<div id='error_msg'>" .$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>
<div><h4>Welcome <?php echo $_SESSION['username']; ?></h4></div> 
</div>
<p>  <?php  echo date("d/m/y"); ?> </p>
<a href="logoutp.php">Log Out</a>

</html>
