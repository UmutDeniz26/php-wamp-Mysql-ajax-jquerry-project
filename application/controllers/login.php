<?php

use App\Task\Task_login_m;

defined('BASEPATH') or exit('No direct script access allowed');

//404 error at project/details/detail?id=1

class login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $task_login_m = new Task_login_m();
        $password = $task_login_m->getPasswordHash($_POST['username']);
        $_SESSION['login'] = false;

        if (isset($password[0]->password)) {
            if (password_verify($_POST['password'], $password[0]->password)) {

                $_SESSION['username'] = $_POST['username'];
                $_SESSION['login'] = true;
                redirect(base_url());
        
            } else {
                redirect(base_url() . "?login=false&userExists=true");
            }
        } else {
            redirect(base_url() . "?login=false&userExists=false");
        }
    }
}
