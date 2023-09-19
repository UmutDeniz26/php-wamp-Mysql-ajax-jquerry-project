<?php

use App\Task\Task_m;

defined('BASEPATH') or exit('No direct script access allowed');

//404 error at project/details/detail?id=1

class updateTask extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $input_id = $_GET['id'];
        $task_m = new Task_m();
        $tasks = $task_m->getTasks($input_id);
        $data['tasks'] = $tasks;
        $this->LoadView('update', 'Ana Sayfa',$data);
    }
    public function update()
    {
        $_POST['id'] = $_GET['id'];
        $task_m = new Task_m();
        var_dump($_POST);
        $task_m->updateTask($_POST);
        redirect(base_url('index.php'));
    }
}
?>