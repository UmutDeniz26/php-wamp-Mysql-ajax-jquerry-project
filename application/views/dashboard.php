<!-- Main content -->
<div class="content-wrapper">
	<!-- Inner content -->
	<div class="content-inner">
		<!-- Content area -->
		<div class="content">
			<!-- Ajax sourced data -->
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Ajax sourced data</h5>
				</div>
				<table class="table datatable-basic" id="custom-datatable-ajax">
					<thead>
						<tr>
							<th>id</th>
							<th>Title</th>
							<th>Description</th>
							<th>Content</th>
							<th>Deadline</th>
							<th>Create date</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
				</table>
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
	</div>
</div>

<script>
	$dataTableName = "#custom-datatable-ajax";
	state = [];

	function fetchDataTable($document_) {

		console.log("Document: " + $document_);
		// Initialize DataTable
			$($document_).DataTable({
				"responsive": true,
				"autoWidth": false,
				"ajax": {
					"url": "./getTableData",
					"dataSrc": "",
				},
				"columns": [{
						"data": "id"
					},
					{
						"data": "title"
					},
					{
						"data": "description"
					},
					{
						"data": "content"
					},
					{
						"data": "deadline",
						"class":"text-center"
					},
					{
						"data": "create_date"
					},
					{
						"data": "status"
					},
					{
						"data": "action"
					}
				]
			});

	}
	fetchDataTable($dataTableName);

	function updateStatus(input_id, input_status) {
		updateTask(input_id, null, null, null, null, null, !input_status);
		fetchDataTable($dataTableName);
	}

	function updateDeadlineButton() {
		id = window.state['id'];
		deadline = document.getElementById('modalDeadline').value;
		updateTask(id, null, null, null, deadline);
		fetchDataTable($dataTableName);
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
		$.ajax({
			url: './updateDynamic',
			type: 'POST',
			data: data_json,
			success: function(data) {
				console.log('Posted Successfully' + data);
			}
		});
	}

	function changeStateID(id) {
		window.state['id'] = id;
	}
</script>