<div class="content-wrapper">
	  <div class="container-full">
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Form Validation</h4>
			  <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
			</div>

			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form id="mainForm" action="<?= base_url('services/servicesControllers/store') ?>" method="POST" enctype="multipart/form-data">
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
								<h5>Title</h5>
								<div class="controls">
									<input type="text" name="title" class="form-control" placeholder="Title Service" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
							</div>
							<div class="form-group">
								<h5>Description</h5>
								<div class="controls">
									<textarea name="description" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
								</div>
							</div>
							<div class="form-group">
								<h5>Reviews</h5>
								<div class="controls">
									<textarea name="reviews" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
								</div>
							</div>
							<div class="form-group">
								<h5>Rating</h5>
								<div class="controls">
									<input type="text" name="rating" class="form-control" placeholder="Title Service" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
							</div>
							<div class="form-group">
								<h5>Images</h5>
								<div class="controls">
									<input type="file" name="images" class="form-control" placeholder="Title Service" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
							</div>
						</div>
						</div>
						<div class="text-xs-right">
							<button type="button" class="btn btn-rounded btn-info mt-2" id="openModal">Submit</button>
						</div>
					</form>
				</div>
			  </div>
			</div>
		  </div>
		</section>
	  </div>
  </div>

<!-- Detail service form -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Tambah Service Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="detailForm">
          <div class="form-group">
            <label for="detailTitle">Judul Detail</label>
            <input type="text" class="form-control" id="detailTitle" name="detail_title" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="detailPrice">Harga Produk</label>
            <input type="number" class="form-control" id="detailPrice" name="detail_price" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="detailStatus">Status</label>
            <fieldset class="controls">
                <input name="detail_status" type="radio" id="radio_1" value="1" required>
                <label for="radio_1">Aktif</label>
            </fieldset>
            <fieldset>
                <input name="detail_status" type="radio" id="radio_2" value="0"> 
                <label for="radio_2">Tidak Aktif</label>                                 
            </fieldset>
          </div>
		      <div class="form-group">
            <label for="detailType">Tipe Jasa</label> 
            <select name="detail_type" id="detailType" required class="form-control select2">
                <?php foreach ($types as $type): ?>
                    <option value="<?php echo $type['id']; ?>"><?php echo $type['name']; ?></option>
                <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="detailSpecialist">Tipe Spesialis</label> 
            <select name="detail_specialist" id="detailSpecialist" required class="form-control select2">
                <?php foreach ($specialist as $specialis): ?>
                    <option value="<?php echo $specialis['id']; ?>"><?php echo $specialis['name']; ?></option>
                <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="detailImage">Foto Detail</label> 
            <input type="file" class="form-control" id="detailImage" name="detail_image" autocomplete="off" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveDetails">Save Details</button>
      </div>
    </div>
  </div>
</div>

<script>
     document.getElementById('openModal').addEventListener('click', function() {
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Apakah Anda yakin ingin menyimpan data ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#detailModal').modal('show');
            }
        });
    });

    document.getElementById('saveDetails').addEventListener('click', function() {
        var formData = new FormData(document.getElementById('mainForm'));
        var detailFormData = new FormData(document.getElementById('detailForm'));
        
        for (var pair of detailFormData.entries()) {
            formData.append(pair[0], pair[1]);
        }

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= base_url('services/servicesControllers/store') ?>', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                window.location.href = '<?= base_url('services/servicesControllers') ?>';
            } else {
                console.error(xhr.responseText);
            }
        };
        xhr.send(formData);
    });
</script>

