<?php

use App\Task\Task_m;


defined('BASEPATH') or exit('No direct script access allowed');

class updateDynamic extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        if (isset($_POST['status'])) {
            $_POST['status'] = $_POST['status'] == "true" ? 1 : $_POST['status'];
        }
        $task_m = new Task_m();
        $task_m->updateTask($_POST);
        echo "Updated Successfully";
    }
}
