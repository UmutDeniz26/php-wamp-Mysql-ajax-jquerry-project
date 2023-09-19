<?php

namespace App\Task;

defined('BASEPATH') or exit('No direct script access allowed');

class Task_m extends \Core_Model
{
    const Table = 'tasks';
    public int $id;
    public string $title;
    public string $description;
    public string $deadline;
    public int $status;
    public string $create_date;
    public string $update_date;
    public string $GCRecord;

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserLoginData(){
        false;
    }
}

/* End of file Core_Model.php */