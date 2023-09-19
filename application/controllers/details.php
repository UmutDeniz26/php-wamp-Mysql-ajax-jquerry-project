<?php

use App\Task\Task_m;
defined('BASEPATH') or exit('No direct script access allowed');

//404 error at project/details/detail?id=1

class details extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        echo "test";
        $this->LoadView('details', 'Ana Sayfa');
    }
    public function detail()
    {
        $input_id = $_GET['id'];
        $task_m = new Task_m();
        $tasks = $task_m->getTasks($input_id);
        $data['tasks'] = $tasks;
        
        $this->LoadView('details', 'Ana Sayfa', $data);
    }
    public function update()
    {
        $task_m = new Task_m();
        $task_m->updateTask($_POST['title'], $_POST['description'], $_POST['deadline'], date('Y-m-d H:i:s'));
    }
}
?>