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
		$task_m = new Task_m();
		$tasks = $task_m->getTasks();
		$data['tasks'] = $tasks;
		$this->LoadView('dashboard', 'Ana Sayfa',$data);
	}
	public function addTask()
	{
		$this->LoadView('details', 'Ana Sayfa');
	}
}
?>