<?php

class Reminder extends Controller {
	
    public function index($id = '') {		
        $r = $this->model('Reminders');
		$list = $r->get_reminders();
		if ($id) {
			$item = $r->get_reminder($id);
			print_r ($item);
			//$this->view('remind/view', ['item' => $item] );
			die;
		}
		$this->view('reminder/index', [
		'list' => $list
		] );
    }
	public function update($id) {
		$r = $this->model('Reminders');
        $item = $r->get_reminder($id);
		$this->view('reminder/update', ['item' => $item] );
			
    }
	
	public function remove($id = '') {
		$r = $this->model('Reminders');
		$r->removeItem($id);
		header('Location:/reminder');
    }
	
	public function Create() {
	        	$r = $this->model('Reminders');
	        	$this->view('reminder/Create');
	        	if(isset($_POST['create'])){
	        	        $subject=$_POST['subject'];
	        	         $description=$_POST['description'];
	        	         $r->create();
	        	}
    }
}