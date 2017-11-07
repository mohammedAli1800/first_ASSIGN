<?php

class Home extends Controller {

    public function index($name = '') {		
        $user = $this->model('User');
	$message='hi'.$_SESSION['username'];
	 
        $this->view('home/index', ['message' => $message]);
    }

    public function login($name = '') {
        $this->view('home/login');
    }

}
