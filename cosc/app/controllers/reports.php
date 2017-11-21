<?php

class reports extends Controller {
    public function index() {
       
		 $this->view('reports/reports');    
    }
    public function MostUsersReminders() {
		 $users = $this->model('Reminders');
        $list = $users->reports();
        $this->view('reports/MostUsersReminders',[
        'list' => $list
        ] );   
}
    public function totalUserslogins() {
        $users = $this->model('reports');
        $list=$users->totalUserslogins();
        $this->view('reports/totalUserslogins',[
        'list' => $list
        ] );
   
    }
}