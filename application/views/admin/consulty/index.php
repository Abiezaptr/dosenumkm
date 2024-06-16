<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center justify-content-between">
				<div>
					<h3 class="page-title">Manage Consulty</h3>
				</div>
				<div>
					<a href="<?= site_url('admin/dashboard') ?>" class="btn btn-danger float-right mr-2">Kembali</button>
					<a href="<?= site_url('admin/consulty/konsultasiControllers/create') ?>" class="btn btn-info float-right mr-2">Add Consulty</a>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<!-- <section class="content">
			<div class="row">
			  <div class="col-12">
				<div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">About Product</h4>
					</div>
				  <div class="box-body">
					<form action="#">
						<div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									  <label class="font-weight-700 font-size-16">Product Name</label>
									  <input type="text" class="form-control" placeholder="Product Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									   <label class="font-weight-700 font-size-16">Sub text</label>
									   <input type="text" class="form-control" placeholder="Lorem Ipsum Text...">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Category</label>
										<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
											<option value="Category 1">Category 1</option>
											<option value="Category 2">Category 2</option>
											<option value="Category 3">Category 5</option>
											<option value="Category 4">Category 4</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Status</label>
										<div class="radio-list">
											<label class="radio-inline p-0 mr-10">
												<div class="radio radio-info">
													<input type="radio" name="radio" id="radio1" value="option1">
													<label for="radio1">Published</label>
												</div>
											</label>
											<label class="radio-inline">
												<div class="radio radio-info">
													<input type="radio" name="radio" id="radio2" value="option2">
													<label for="radio2">Draft</label>
												</div>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Price</label>
										<div class="input-group">
											<div class="input-group-addon"><i class="ti-money"></i></div>
											<input type="text" class="form-control" placeholder="270"> </div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Discount</label>
										<div class="input-group">
											<div class="input-group-addon"><i class="ti-cut"></i></div>
											<input type="text" class="form-control" placeholder="50%"> </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Product Description</label>
										<textarea class="form-control p-20" rows="4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Meta Title</label>
										<input type="text" class="form-control"> </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="font-weight-700 font-size-16">Meta Keyword</label>
										<input type="text" class="form-control"> </div>
								</div>
							</div>
						</div>
						<div class="form-actions mt-10">
							<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
							<button type="button" class="btn btn-secondary">Cancel</button>
						</div>
					</form>
				  </div>
				</div>
			  </div>		  
		  </div>
		</section> -->

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			<div class="col-xl-12 col-lg-9 col-12">
				<div class="box">
					<div class="box-header with-border">						
						<h4 class="box-title">Consulty List</h4>
						<h6 class="box-subtitle">Export Invoice List to Copy, CSV, Excel, PDF & Print</h6>
					</div>
					<div class="box-body">						
						<div class="table-responsive">
							<table id="example" class="table table-lg invoice-archive">
								<thead>
									<tr>
										<th>#</th>
										<th>Period</th>
										<th>Issued to</th>
										<th>Status</th>
										<th>Issue date</th>
										<th>Due date</th>
										<th>Amount</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>

								</tbody>
							</table>

						</div>
					</div>
				</div>
			</div>
		  </div>
		</section>
	  </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Add Consulty</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="consultyName">Name</label>
              <input type="text" class="form-control" id="consultyName" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="consultyEmail">Email</label>
              <input type="email" class="form-control" id="consultyEmail" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="consultyType">Type</label>
              <select class="form-control" id="consultyType">
                <option>Consultant</option>
                <option>Advisor</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="consultyDescription">Description</label>
              <textarea class="form-control" id="consultyDescription" rows="3"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
