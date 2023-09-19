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


    public function getTasks($id = null)
    {
        // select * from tasks
        $this->db->select('*');
        $this->db->from(self::Table);
        
        if (isset($id)) {
            $this->db->where('id', $id);
        }

        $query = $this->db->get();

        return $query->result();
    }

    public function addTask($data)
    {
        //Load data
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }

        //Const
        $this->status = 0;
        $this->create_date = date('Y-m-d H:i:s');
        $this->update_date = date('Y-m-d H:i:s');

        //Insert
        $this->db->insert(self::Table, $this);
        redirect(base_url());
    }

    public function deleteTask()
    {
        $this->db->where('id', $_GET['id']);
        $this->db->delete(self::Table);
    }

    public function updateTask($data)
    {
        if (isset($data['status'])) {
            $data['status'] = $data['status'] == "on" ? 1 : $data['status'];
        }

        $data['update_date'] = date('Y-m-d H:i:s');
        $this->db->where('id', $data['id']);
        $this->db->update(self::Table, $data);
    }
}

/* End of file Core_Model.php */