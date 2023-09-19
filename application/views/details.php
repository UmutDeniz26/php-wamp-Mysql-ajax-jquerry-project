<div id="container" class="col-md">
	<div class="card-body">
		<form>
			<fieldset class="mb-3">
				<legend class="text-uppercase font-size-sm font-weight-bold">Detailed Showcase</legend>

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Title</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" readonly value="<?php echo $tasks[0]->title; ?>"
						name="title">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Description</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" readonly value="<?php echo $tasks[0]->description; ?>"
						name="description">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Content</label>
					<div class="col-lg-10">
						<textarea rows="3" cols="3" class="form-control" placeholder="<?php echo $tasks[0]->description; ?>"
						readonly></textarea>
					</div>
				</div>


				<div class="form-group row">
					<label class="col-form-label col-lg-2">Deadline</label>
					<div class="col-lg-10">
						<input type="date" class="form-control" readonly value="<?php echo $tasks[0]->deadline; ?>"
						name="deadline">
					</div>
				</div>


				<div class="form-group row">
					<label class="col-form-label col-lg-2">Create Date</label>
					<div class="col-lg-10">
						<input readonly type="text" class="form-control" value="<?php echo $tasks[0]->create_date; ?>"
						autocomplete="off"  readonly>
					</div>
				</div>
				<div class="text-right">

					<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-8"></i></button>
			</fieldset>
		</form>
	</div>
</div>