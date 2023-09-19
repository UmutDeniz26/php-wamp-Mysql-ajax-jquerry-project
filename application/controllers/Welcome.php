<?php

use App\Task\Task_m;

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if (isset($_SESSION['login'])) {
			if ($_SESSION['login'] == true) {
				$this->LoadView('dashboard', 'Ana Sayfa');
			} else {
				$this->LoadView('login', 'Ana Sayfa');
			}
		} else {
			$this->LoadView('login', 'Ana Sayfa');
		}
	}
	public function addTask()
	{
		$this->LoadView('details', 'Ana Sayfa');
	}
}
