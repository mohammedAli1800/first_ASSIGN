<?php

class Login extends Controller {
    public function index() {
        $user = $this->model('User');

        if(isset($_SESSION["logged"])){
                $user->name= ($_POST['user']);
                $user->pass=($_POST['pass']);
                $user->pass=md5($user->pass);
}
        $user->authenticate();

        if ($user->auth == true) {
            $_SESSION['auth'] = true;
        }
        
        header('Location: /home');
    }
	
	public function register () {
		$user = $this->model('User');
	        if(isset($_POST['register'])){

                    $name= ($_POST['user']);
                    //$email=($_POST['email']);
                    $pass=($_POST['pass']);
                    $hash=md5($pass);
			
			$user->register($name, $hash);
			$_SESSION['auth'] = true;
		}
		
		$this->view('home/register');
	}
}
