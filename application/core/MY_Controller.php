<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function check_login($username, $password, $loginData)
    {

        $username = "workInProgress";
        $password = "workInProgress";

        if ($loginData) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            return true;
        } else {
            return false;
        }
    }

    public function LoadView($view, $title, $data = null)
    {
        $data['content'] = $view;
        $data['title'] = $title;
        if (isset($loginData[0]) && isset($loginData[1])) {
            $loginData = array(
                'username' => $_SESSION['username'],
                'password' => $_SESSION['password']
            );
            $data['loginData'] = $loginData;
        }

        $data['login'] = false;

        if ($data['login'] == true) {
            return $this->load->view('components/core_view', $data);
        } else {
            return $this->load->view('components/core_loginPage', $data);
        }
    }
}
