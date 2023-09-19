<?php

use App\Task\Task_login_m;

defined('BASEPATH') or exit('No direct script access allowed');

//404 error at project/details/detail?id=1

class register extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->LoadView('register', 'Ana Sayfa');
        
    }
    public function submit(){
        print_r($_POST);
        $password_hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $task_login_m = new Task_login_m();
        $task_login_m->addNewUser($_POST['username'],$password_hashed,$_POST['email']);
        redirect(base_url());
    }
}
