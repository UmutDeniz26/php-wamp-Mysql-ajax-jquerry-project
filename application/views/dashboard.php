<?php
function calculateDaysLeft($startDate, $endDate)
{
	$start = new DateTime($startDate);
	$end = new DateTime($endDate);
	$diff = $end->diff($start);
	$days = $diff->format("%a");
	return $days;
}
function render_table($tasks)
{
	foreach ($tasks as $key => $value) {
		echo
		"<tr id = elementid$value->id>
		<td>" . $key + 1 . "</td>
		<td name='title$value->id'><a href='./details/detail?id=$value->id'></a></td>
		<td name='description$value->id'></td>
		<td name='content$value->id'></td>
		<td name='deadline$value->id'></td>
		<td name='create_date$value->id'></td>
		<td>" . calculateDaysLeft($value->create_date, $value->deadline) . "</td>
		<td>
			<div class='header-elements text-center'>
				<label class='custom-control custom-switch custom-control-right'>
					<input type='checkbox' class='custom-control-input' " . ($value->status ? "checked" : "") . "
						name='status' id='status' onclick='updateStatus(" . $value->id . "," . $value->status . ")'>
					<span class='custom-control-label p-0'></span>
				</label>
			</div>
		</td>
		<td class='text-center'>
			<div class='list-icons'>
				<div class='dropdown'>
					<a href='#' class='list-icons-item' data-toggle='dropdown'><i class='icon-menu9'></i></a>
					<div class='dropdown-menu dropdown-menu-right'>
						<a href='./updateTask?id=$value->id' class='dropdown-item'><i class=''></i>Edit</a>
						<a href='./deleteTask?id=$value->id' class='dropdown-item'><i class=''></i>Delete</a>
					</div>
				</div>
			</div>
		</td>
	</tr>";
	}
}
?>

<div id="container" class="col-md">
	<div class="card">
		<div class="card-header">
			<h5 class="card-title">Dashboard</h5>
		</div>

		<div class="card dropdown-scrollable">

			<table class="table datatable-ajax">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Description</th>
						<th>Content</th>
						<th>Deadline</th>
						<th>Start date</th>
						<th>Days Left</th>
						<th>Status</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
						render_table($tasks);
					?>
				</tbody>
			</table>
		</div>
	</div>

	<div id="modal_default" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form>
						<div class="form-group">
							<h6 class="font-weight-semibold">Type A New Deadline</h6>
							<input type="date" class="form-control" id="modalDeadline">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="updateDeadlineButton()">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	state = [];

	function updateStatus(input_id, input_status) {
		updateTask(input_id, null, null, null, null, null, !input_status);
		getTableElements();
	}

	function updateDeadlineButton() {

		id = window.state['id'];
		deadline = document.getElementById('modalDeadline').value;
		console.log("id: " + id + " deadline: " + deadline);
		updateTask(id, null, null, null, deadline);
		getTableElements();
		document.getElementById('modalDeadline').value = "";
	}

	function updateTask(id, title = null, description = null, content = null, deadline = null, create_date = null, status = null) {
		data_json = {};
		arg_names = ['id', 'title', 'description', 'content', 'deadline', 'create_date', 'status'];
		for (i = 0; i < arguments.length; i++) {
			if (arguments[i] != null) {
				data_json[arg_names[i]] = arguments[i];
			}
		}
		console.log(data_json);
		$.ajax({
			url: './updateDynamic',
			type: 'POST',
			data: data_json,
			success: function(data) {
				console.log('Posted Successfully' + data);
			}
		});
	}

	async function getTableElements() {
		$.ajax({
			url: './getTasks',
			type: 'GET',
			success: function(data) {
				console.log('Fetch Successfully');
			}
		}).then((data) => (assignTableElements(data)));
	}

	function assignTableElements(data) {
		data = JSON.parse(data);
		data.forEach(element => {
			document.getElementById(`elementid${element.id}`).children[1].children[0].innerHTML = element.title;
			document.getElementById(`elementid${element.id}`).children[2].innerHTML = element.description;
			document.getElementById(`elementid${element.id}`).children[3].innerHTML = element.content;
			document.getElementById(`elementid${element.id}`).children[4].innerHTML = element.deadline;
			document.getElementById(`elementid${element.id}`).children[5].innerHTML = element.create_date;
			document.getElementById(`elementid${element.id}`).children[4].innerHTML += `

				<button type='button' class="btn btn-link" data-toggle='modal' data-target='#modal_default'" 
				onclick='changeStateID("` + element.id + `")'>Edit</button>`;
		});
	}

	function changeStateID(id) {window.state['id'] = id;}
	getTableElements();
	//If any kind of change occurs, run this function getTableElements()
</script>