 <div class="body-wrapper">
     <div class="container-fluid">

         <section>
             <!-- Row -->
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header bg-warning">
                             <h5 class="mb-0 text-white">Review Data</h5>
                         </div>
                         <form class="form-horizontal">
                             <div class="form-body">
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                 <label class="control-label text-end col-md-3"><b>ID Konsultan :</b></label>
                                                 <div class="col-md-9">
                                                     <p class="form-control-static"><?php echo $consultant['consultan_id']; ?></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--/span-->
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                 <label class="control-label text-end col-md-3"><b>Account :</b></label>
                                                 <div class="col-md-9">
                                                     <p class="form-control-static"><?php echo $consultant['username']; ?></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--/span-->
                                     </div>
                                     <!--/row-->
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                 <label class="control-label text-end col-md-3"><b>Tipe Konsultan :</b></label>
                                                 <div class="col-md-9">
                                                     <p class="form-control-static text-uppercase"><?php echo $consultant['type']; ?></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--/span-->
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                 <label class="control-label text-end col-md-3"><b>Username :</b></label>
                                                 <div class="col-md-9">
                                                     <p class="form-control-static"><?php echo $consultant['name']; ?></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--/span-->
                                     </div>
                                     <!--/row-->
                                 </div>
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                 <label class="control-label text-end col-md-3"><b>Nama Lengkap :</b></label>
                                                 <div class="col-md-9">
                                                     <p class="form-control-static">
                                                         <?php
                                                            if ($consultant['gelar'] == 'Tuan') {
                                                                echo 'Tn';
                                                            } elseif ($consultant['gelar'] == 'Ibu') {
                                                                echo 'Ibu';
                                                            } elseif ($consultant['gelar'] == 'Bapak') {
                                                                echo 'Bpk';
                                                            } elseif ($consultant['gelar'] == 'Nona') {
                                                                echo 'Nona';
                                                            } else {
                                                                echo $consultant['gelar'];
                                                            }
                                                            ?>, <?php echo $consultant['nama_depan']; ?> <?php echo $consultant['nama_belakang']; ?>
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--/span-->
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                 <label class="control-label text-end col-md-3"><b>No. KTP :</b></label>
                                                 <div class="col-md-9">
                                                     <p class="form-control-static"><?php echo $consultant['no_ktp']; ?></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--/span-->
                                     </div>
                                     <!--/row-->
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                 <label class="control-label text-end col-md-3"><b>Domisili :</b></label>
                                                 <div class="col-md-9">
                                                     <p class="form-control-static text-uppercase"><?php echo $consultant['domisili']; ?></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--/span-->
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                 <label class="control-label text-end col-md-3"><b>Alamat :</b></label>
                                                 <div class="col-md-9">
                                                     <p class="form-control-static"><?php echo $consultant['alamat']; ?></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--/span-->
                                     </div>
                                 </div>
                                 <hr class="mt-0 mb-1" />
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-md-4 offset-md-2">
                                             <div class="card" style="padding: 10px;">
                                                 <div class="card-body text-center">
                                                     <h8 class="card-title"><small>Foto Selfie</small></h8>
                                                     <br><br>
                                                     <img src="<?= base_url('uploads/' . $consultant['selfie_file']); ?>" class="img-fluid" alt="Selfie with KTP">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="card" style="padding: 10px;">
                                                 <div class="card-body text-center">
                                                     <h8 class="card-title"><small>E-KTP</small></h8>
                                                     <br><br>
                                                     <img src="<?= base_url('uploads/' . $consultant['ktp_file']); ?>" class="img-fluid" alt="KTP">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <hr />
                                 <div class="form-actions">
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="row">
                                                     <div class="col-md-offset-3 col-md-9">
                                                         <a href="<?= site_url('selling/webhook') ?>" class="btn btn-primary">
                                                             Lanjutkan
                                                         </a>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6"></div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                     <!-- ---------------------
                                    start Form with view only
                                ---------------- -->
                 </div>
             </div>
             <!-- Row -->
         </section>
         <!-- --------------------------------------------------- -->
         <!--  Form Details End -->
         <!-- --------------------------------------------------- -->
     </div>
 </div>
 <div class="dark-transparent sidebartoggler"></div>
 </div>