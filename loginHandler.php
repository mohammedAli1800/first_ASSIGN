<?php

session_start();

 $userData["mohammed"] = "1234";
 $userData["1"] = "1";
         foreach($userData as $usrName => $Password){
                 if($usrName ==$_POST['usr']){
                         if($Password==$_POST['pass']){
                                 $_SESSION['logged'] = true;
                                 $_SESSION['usr'] = $usrName;
                                 $_SESSION['password'] = $Password;
                                 header("Location: welcome.php");
                                die();
                         }
                        
                 }
         }
         if(isset($_SESSION['failed'])){
                 $_SESSION['failed']++;
                 
         }else{
                 $_SESSION['failed'] =1;
              
                 
         }
         header("Location: index.php");

?>