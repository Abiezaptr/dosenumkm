<style>
    .card-rounded {
      border-radius: 15px;
    }
  </style>
 
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="d-flex align-items-center justify-content-between">
          <div>
            <h3 class="page-title">Kelola Services</h3>
          </div>
          <div>
            <a href="<?= site_url('admin/dashboard') ?>" class="btn btn-danger float-right mr-2">Kembali</a>
            <a href="<?= site_url('services/servicesControllers/create') ?>" class="btn btn-info float-right mr-2">Tambah Services</a>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-rounded">
              <div class="card-body">
                <div class="table-responsive">
                  <table id="serviceTable" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th class="text-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($services as $index => $service): ?>
                      <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $service['title'] ?></td>
                        <td><?= $service['category_name'] ?></td>
                        <td><?= $service['description'] ?></td>
                        <td><?= $service['rating'] ?></td>
                        <td>
                          <?php if ($service['status'] == 1): ?>
                          <span class="badge badge-success">Active</span>
                          <?php else: ?>
                          <span class="badge badge-danger">Inactive</span>
                          <?php endif; ?>
                        </td>
                        <td><?= $service['created_at'] ?></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center">
                                <a href="<?= site_url('services/servicesControllers/detail/'.$service['id']) ?>" class="btn btn-sm btn-secondary mr-1">Detail</a>
                                <a href="<?= site_url('services/servicesControllers/edit/'.$service['id']) ?>" class="btn btn-sm btn-secondary mr-1">Edit</a>
                                <a href="<?= site_url('services/servicesControllers/delete/'.$service['id']) ?>" class="btn btn-sm btn-secondary">Hapus</a>
                            </div>
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

<script>
	window.onload = function() {
		<?php if ($this->session->flashdata('success')): ?>
			Swal.fire({
				position: 'top-end',
				icon: 'success',
				title: 'Success!',
				text: '<?= $this->session->flashdata('success'); ?>',
				timer: 3000,
				timerProgressBar: true,
				showConfirmButton: false,
				toast: true  
			});
		<?php endif; ?>

		<?php if ($this->session->flashdata('error')): ?>
			Swal.fire({
				position: 'top-end',
				icon: 'error',
				title: 'Oops...',
				text: '<?= $this->session->flashdata('error'); ?>',
				timer: 3000,
				timerProgressBar: true,
				showConfirmButton: false,
				toast: true 
			});
		<?php endif; ?>
	}
</script>