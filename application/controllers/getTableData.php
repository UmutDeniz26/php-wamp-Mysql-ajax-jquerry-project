<?php

use App\Task\Task_m;

defined('BASEPATH') or exit('No direct script access allowed');

class getTableData extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $task_m = new Task_m();
        $tasks = $task_m->getTasks();
        foreach ($tasks as $key => $value) {
            $tasks[$key]->status = "
        <td>
			<div class='header-elements text-center'>
				<label class='custom-control custom-switch custom-control-right'>
					<input type='checkbox' class='custom-control-input' " . ($tasks[$key]->status ? "checked" : "") . "
						name='status' id='status' onclick='updateStatus(" . $tasks[$key]->id . "," . $tasks[$key]->status . ")'>
					<span class='custom-control-label p-0'></span>
				</label>
			</div>
		</td>";
            $tasks[$key]->action = "
		<td class='text-center'>
			<div class='list-icons'>
				<div class='dropdown'>
					<a href='#' class='list-icons-item' data-toggle='dropdown'><i class='icon-menu9'></i></a>
					<div class='dropdown-menu dropdown-menu-right'>
						<a href='./updateTask?id=" . $tasks[$key]->id . "' class='dropdown-item'><i class=''></i>Edit</a>
						<a href='./deleteTask?id=" . $tasks[$key]->id . "' class='dropdown-item'><i class=''></i>Delete</a>
					</div>
				</div>
			</div>
		</td>";
            $tasks[$key]->deadline = date("Y-m-d", strtotime($tasks[$key]->deadline)) . "
        <button type='button' class='btn btn-link' data-toggle='modal' data-target='#modal_default' 
        onclick='changeStateID(" . $tasks[$key]->id . ")'> <i class='icon-pencil7'></i></button>";
            $tasks[$key]->title = "<td name='title" . $tasks[$key]->id . "'><a href='./details/detail?id=" .
            $tasks[$key]->id . "'>" . $tasks[$key]->title . "</a></td>";
            $tasks[$key]->create_date = date("Y-m-d", strtotime($tasks[$key]->create_date));
            $tasks[$key]->content = substr($tasks[$key]->content, 0, 50) . "...";
        }
        echo json_encode($tasks);
    }
}
