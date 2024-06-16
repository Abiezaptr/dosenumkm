<div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Form Validation</h4>
			  <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form action="<?= base_url('services/servicesControllers/store') ?>" method="POST">
					  <div class="row">
						<div class="col-12">	
							<div class="form-group">
								<h5>Service Category <span class="text-danger">*</span></h5>
								<div class="controls">
									<select name="category_id" id="select" required class="form-control">
									<?php foreach ($categories as $category): ?>
										<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
									<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<h5>Title <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" name="title" class="form-control" placeholder="Title Service" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
							</div>
							<div class="form-group">
								<h5>Description <span class="text-danger">*</span></h5>
								<div class="controls">
									<textarea name="description" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
								</div>
							</div>
						</div>
					  </div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h5>Checkbox <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="checkbox" id="checkbox_1" required value="single">
										<label for="checkbox_1">Check this custom checkbox</label>
									</div>								
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<h5>Checkbox Group <span class="text-danger">*</span></h5>
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_2" required value="x">
											<label for="checkbox_2">I am unchecked Checkbox</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_3" value="y">
											<label for="checkbox_3">I am unchecked too</label>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h5>Select Max 2 Checkbox<span class="text-danger">*</span></h5>
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_4" data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="Don't be greedy!" required>
											<label for="checkbox_4">I am unchecked Checkbox</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_5">
											<label for="checkbox_5">I am unchecked too</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_6">
											<label for="checkbox_6">You can check me</label>
										</fieldset>
									</div> <small>Select any 2 options</small> </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<h5>Minimum 2 Checkbox selection<span class="text-danger">*</span></h5>
									<div class="controls">
										<fieldset>
											<input type="checkbox" id="checkbox_7" value="1" data-validation-minchecked-minchecked="2" data-validation-minchecked-message="Choose at least two" name="styled_min_checkbox" required>
											<label for="checkbox_7">I am unchecked Checkbox</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_8" value="2">
											<label for="checkbox_8">I am unchecked too</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" id="checkbox_9" value="3">
											<label for="checkbox_9">You can check me</label>
										</fieldset>
									</div> <small>Select any 2 options</small> </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<h5>Radio Buttons <span class="text-danger">*</span></h5>
									<fieldset class="controls">
										<input name="group1" type="radio" id="radio_1" value="1" required>
										<label for="radio_1">Check Me</label>
									</fieldset>
									<fieldset>
										<input name="group1" type="radio" id="radio_2" value="2">
										<label for="radio_2">Or Me</label>									
									</fieldset>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<h5>Inline Radio Buttons <span class="text-danger">*</span></h5>
									<div class="controls">
										<fieldset>
											<input name="group2" type="radio" id="radio_3" value="Yes" required>
											<label for="radio_3">Check Me</label>
										</fieldset>
										<fieldset>
											<input name="group2" type="radio" id="radio_4" value="No">
											<label for="radio_4">Or Me</label>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info">Submit</button>
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>