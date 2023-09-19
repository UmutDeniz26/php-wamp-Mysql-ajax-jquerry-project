<div id="container" class= "col-md">
	<div class="card-body">
		<form action="./updateTask/update?id=<?php echo $tasks[0]->id; ?>" method="POST">
			<fieldset class="mb-3">
				<legend class="text-uppercase font-size-sm font-weight-bold">Detailed Showcase</legend>
				<div class="form-group row">
					<label class="col-form-label col-lg-2">Title</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="title" placeholder="<?php echo $tasks[0]->title; ?>">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-form-label col-lg-2">Description</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" placeholder="<?php echo $tasks[0]->description; ?>" name="description">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-form-label col-lg-2">Content</label>
					<div class="col-lg-10">
						<textarea rows="3" cols="3" class="form-control" placeholder="<?php echo $tasks[0]->description; ?>"></textarea>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-form-label col-lg-2">Deadline</label>
					<div class="col-lg-10">
						<input type="date" class="form-control" name="deadline" placeholder="<?php echo $tasks[0]->deadline; ?>">
					</div>
				</div>

				<!-- Status -->
				<div class="form-group row">
					<label class="col-form-label col-lg-2">Status</label>
					<div class='col-lg-10'>
						<label class='custom-control custom-switch custom-control-right'>
							<input type='checkbox' class='custom-control-input' name="status" <?php echo ($tasks[0]->status ? " checked" : ""); ?>>
							<span class='custom-control-label p-0'></span>
						</label>
					</div>
				</div>


				<div class=" text-right">
					<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-8"></i></button>
			</fieldset>
		</form>
	</div>
</div>