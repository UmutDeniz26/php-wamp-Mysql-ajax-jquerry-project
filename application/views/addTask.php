<div id="container" class="col-md">
	<div class="card-body">
		<form action="./submit" method="POST">
			<fieldset class="mb-3">
				<legend class="text-uppercase font-size-sm font-weight-bold">Add Modal</legend>

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Title</label>
					<div class="col-lg-10">
						<input required type="text" class="form-control" name="title">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Description</label>
					<div class="col-lg-10">
						<input required type="text" class="form-control" name="description">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Content</label>
					<div class="col-lg-10">
						<textarea required rows="3" cols="3" class="form-control" name="content"></textarea>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-form-label col-lg-2">Deadline</label>
					<div class="col-lg-10">
						<input required type="date" class="form-control" name="deadline">
					</div>
				</div>

				<div class="text-right">
					<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-8"></i></button>
				</div>
			</fieldset>
		</form>
	</div>
</div>