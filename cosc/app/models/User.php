<?php

class User {



    public function __construct() {
        
    }

    public function authenticate($username,$password) {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		 
		$db = db_connect();
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query="SELECT * FROM users WHERE username = :username AND password=:password";
        $statement = $db->prepare($query);
        $statement->execute(array(
                'username'=>$_POST['username'],
                'password'=>$_POST['password'],
                ));
        $rows=$statement->rowCount();
		if ($rows) {
                    $_SESSION['username'] = $rows['username'];
                    $_SESSION['usertype']=$rows['logintype']
                    $_SESSION['auth']=ture;

		}
    }
       public function LastLogin ($item) {
        
    $db=db_connect();
    $query="INSERT INTO users (LastLogin) Values(:LastLogin) WHERE username=:username";
    $statement=$db->prepare($query);
    $statement->bindParam(':username',$_SESSION['username']);
    $statement->bindParam(':LastLogin',$item);
    $statement->execute();
}
	
	public function register ($username, $password) {
		$db = db_connect();
        $statement = $db->prepare("INSERT INTO users (username,password)"
                . " VALUES (:username,:password) ");
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->execute();
	}

}
