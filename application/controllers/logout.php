<?php

use App\Task\Task_login_m;

defined('BASEPATH') or exit('No direct script access allowed');

//404 error at project/details/detail?id=1

class logout extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {    
        session_unset();
        session_destroy();
        $_SESSION['login'] = false;
        redirect(base_url());
    }
}
