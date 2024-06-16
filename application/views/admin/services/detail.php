<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Detail Service</h4>
                    <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6>
                </div>
                <div class="box-body">
                    <div class="row">
                        <!-- Card untuk Detail Service -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h4 class="box-title mt-40">Rincian Data Service</h4>
                            <div class="card rounded">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td width="100">Service :</td>
                                                    <td><?php echo $service['title']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Kategori :</td>
                                                    <td><?php echo $service['category_name']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Status :</td>
                                                    <td>
                                                        <?php if ($service['status'] == 1): ?>
                                                            <span class="badge badge-success">Aktif</span>
                                                        <?php else: ?>
                                                            <span class="badge badge-danger">Tidak Aktif</span>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Deskripsi :</td>
                                                    <td><?php echo $service['description']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form untuk Tambah Detail Service -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h4 class="box-title mt-40">Form Tambah Detail Service</h4>
                            <form id="mainForm" action="<?= base_url('services/servicesControllers/detailProcess') ?>" method="POST" enctype="multipart/form-data">
                                <div class="card rounded">
                                    <div class="card-body">
                                        <div class="form-group">
                                        <label>Nama Service</label>
                                            <div class="controls">
                                                <select name="services_id" id="select" required class="form-control">
                                                    <?php foreach ($services as $service): ?>
                                                        <option value="<?php echo $service['id']; ?>"><?php echo $service['title']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label>Judul Detail Service</label>
                                            <div class="controls">
                                                <input type="text" name="title" class="form-control" placeholder="Title Service" required> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label>Harga Produk</label>
                                            <div class="controls">
                                                <input type="number" name="price" class="form-control" placeholder="Harga Produk" required> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <label>Status</label>
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
                                        <label>Tipe Jasa</label>
                                            <div class="controls">
                                                <select name="services_id" id="select" required class="form-control">
                                                    <?php foreach ($jasaTypes as $jasa): ?>
                                                        <option value="<?php echo $jasa['id']; ?>"><?php echo $jasa['title']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label>Tipe Spesialis</label>
                                            <div class="controls">
                                                <select name="services_id" id="select" required class="form-control">
                                                    <?php foreach ($specialistTypes as $specialist): ?>
                                                        <option value="<?php echo $specialist['id']; ?>"><?php echo $specialist['title']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label>Image</label>
                                            <div class="controls">
                                                <input type="file" name="images" class="form-control" required> 
                                            </div>
                                        </div>
                                        <div class="text-xs-right">
                                            <button type="submit" class="btn btn-rounded btn-info mt-2">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
