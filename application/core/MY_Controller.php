<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function LoadView($view, $title, $data = null)
    {
        $data['content'] = $view;
        $data['title'] = $title;
        $data['login'] = isset($_SESSION['username']) ? true : false;

        if ($data['login'] == true) {
            return $this->load->view('components/core_view', $data);
        } else {
            return $this->load->view('components/core_loginPage', $data);
        }
    }
}
