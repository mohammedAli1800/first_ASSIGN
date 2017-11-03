<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate() {
        /*
         * if username and password good then
         * $this->auth = true;
         */
		 
		$db = db_connect();
        $statement = $db->prepare("select * from users
                                WHERE username = :name;
                ");
        $statement->bindValue(':name', $this->username);
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		if (isset($rows)) {
		    if($rows[0] ==$this->username){
		        if($rows[1] ==md5($this->password)){
                    $this->auth = true;
                    $_SESSION['name'] = $rows[0]['username'];
                    $_SESSION['password'] = $rows[0]['password'];
                }

            }

		}
    }
	
	public function register ($username, $password) {
		$db = db_connect();
        $statement = $db->prepare("INSERT INTO users (username,password)"
                . " VALUES (:name,:password); ");

        $statement->bindValue(':name', $username);

        $statement->bindValue(':password', $password);
        $statement->execute();

	}

}
