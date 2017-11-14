<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');
        if(isset($_SESSION['user_attempts']>3)){
            header('Location: /home/getattempts');
        }

        if(isset($_POST['login'])){
                $name= $_POST['user'];
                $pass=$_POST['pass'];
        $user->authenticate($name,$pass);
        header('Location: /home');
}
    }
	
	public function register () {
		$user = $this->model('User');
		$this->view('home/register');
	        if(isset($_POST['register'])){
                    $name= $_POST['user'];
                    $pass=$_POST['pass'];
			$hash=password_hash($pass, PASSWORD_DEFAULT);
			$user->register($name,$hash);
			
		}	
		
	}
}
