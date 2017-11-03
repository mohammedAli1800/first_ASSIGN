<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');
	$message1='hi'.$_SESSION['username'];
	 
        $this->view('home/index', ['message' => $message1],['message'=>$message2]);
    }

    public function login($name = '') {
        $this->view('home/login');
    }

}
