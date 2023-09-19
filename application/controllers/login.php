<?php

use App\Task\Task_m;
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
        echo "username: ". $_POST['username'] .",". $_POST['password'];
        

    }
    
}
?>