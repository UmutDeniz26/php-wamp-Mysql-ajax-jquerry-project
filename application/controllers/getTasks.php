<?php

use App\Task\Task_m;


defined('BASEPATH') or exit('No direct script access allowed');

//404 error at project/details/detail?id=1

class getTasks extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $task_m = new Task_m();
        $tasks = $task_m->getTasks();
        echo json_encode($tasks);
    }
}

?>
