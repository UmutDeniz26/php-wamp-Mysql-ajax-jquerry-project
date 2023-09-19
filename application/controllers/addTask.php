<?php

use App\Task\Task_m;
defined('BASEPATH') or exit('No direct script access allowed');

//404 error at project/details/detail?id=1

class addTask extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->LoadView('addTask', 'Ana Sayfa');
    }
    public function submit(){
        $task_m = new Task_m();
        $task_m->addTask($_POST);
        redirect(base_url());
    }
    
}
?>