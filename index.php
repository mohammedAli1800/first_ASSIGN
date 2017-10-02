<html>
<!-- the header of the assgn -->
<h1> welcome to My First Web Page</h1>
<?php
if(isset($_GET["usr"])){
        

 $userData["mohammed"] = "1234";
 $userData["ali"] = "1122";
  $userData["test"] = "0000";
         foreach($userData as $usrName => $Password){
                 if($usrName ==$_GET['usr']){
                         if($Password==$_GET['pass']){

                                 echo("<p><h1>credentials is correct</h1><p>");
                                 die();
                         }
                        
                 }
         }
echo("<p><h1>credentials is not correct!!!<p><h1>");
	echo(" <a href= 'index.php'<p><hi> click here</h1><p> </a>");

}
 ?>
        <form>
	<p><head>login</head></p>
	<b>
	<label for="username">UserName:</label><input type="text" id="username"name="usr"required="required" /></br>
	
	<label for="password">Password:</label><input type="text" id="password" name="pass" required="required" /></br></br>
	<button type="submit" onclick="ubmitInfo()"> login2</button>
	
	</b>
	</form>
        <script>
        function submitInfo() {
            location.href='\index.php?usr='+ document.getElementById('username').value + '&pass='+document.getElementById('password').value;
        
        </script>
	</html>
        
