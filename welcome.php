<?php

session_start();
  if(isset($_SESSION['logged'])){
  	if($_SESSION['logged'] == false){
  	header("Location: index.php?logout=true");
  	die();
  }
}
?>

<h1>Welcome back <?php  echo $_SESSION['usr'] . ". Password is ". $_SESSION['password'] . "."  ?>
<p><a href="index.php?logout=true">logout</a></p>
<p>  <?php  echo date("d/m/y"); ?> </p>

</html>
