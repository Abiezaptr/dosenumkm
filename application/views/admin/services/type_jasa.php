<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center justify-content-between">
				<div>
					<h3 class="page-title">Manage Jasa Type</h3>
				</div>
				<div>
					<a href="<?= site_url('admin/dashboard') ?>" class="btn btn-danger float-right mr-2">Kembali</button>
					<a href="<?= site_url('admin/consulty/konsultasiControllers/create') ?>" class="btn btn-info float-right mr-2">Add Type</a>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			<div class="col-xl-12 col-lg-9 col-12">
				<div class="box">
					<div class="box-header with-border">						
						<h4 class="box-title">Jasa Type List</h4>
						<h6 class="box-subtitle">Export Invoice List to Copy, CSV, Excel, PDF & Print</h6>
					</div>
					<div class="box-body">						
						<div class="table-responsive">
							<table id="example" class="table table-lg invoice-archive">
								<thead>
									<tr>
										<th>#</th>
										<th>Title</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($services as $index => $service): ?>
										<tr>
											<td><?= $index + 1 ?></td>
											<td><?= $service['name'] ?></td>
											<td class="text-center">
												<a href="<?= site_url('admin/serv/servicesControllers/edit/'.$service['id']) ?>" class="btn btn-sm btn-primary mr-1"><i class="ti-marker-alt"></i></a>
												<a href="<?= site_url('admin/serv/servicesControllers/delete/'.$service['id']) ?>" class="btn btn-sm btn-light"><i class="ti-trash"></i></a>
											</td>
										</tr>
									<?php endforeach; ?>
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
