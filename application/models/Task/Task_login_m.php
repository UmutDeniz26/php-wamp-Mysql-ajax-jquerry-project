<?php

namespace App\Task;

defined('BASEPATH') or exit('No direct script access allowed');

class Task_login_m extends \Core_Model
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

    public function getPasswordHash($username)
    {
        $this->db->select('password');
        $this->db->from('user-login');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->result();
    }
    public function addNewUser($username,$password_hash,$email){
        $data = array(
            'username' => $username,
            'password' => $password_hash,
            'email' => $email
        );
        $this->db->insert('user-login', $data);
    }
}

/* End of file Core_Model.php */