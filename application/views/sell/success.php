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
                                                 <label class="control-label text-end col-md-3"><b>Username :</b></label>
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
                                                 <label class="control-label text-end col-md-3"><b>Nama :</b></label>
                                                 <div class="col-md-9">
                                                     <p class="form-control-static"><?php echo $consultant['name']; ?></p>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--/span-->
                                     </div>
                                     <!--/row-->

                                 </div>
                                 <hr class="mt-0 mb-1" />
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                 <label class="control-label text-end col-md-3"><b>Deskripsi :</b></label>
                                                 <div class="col-md-9">
                                                     <p class="form-control-static"><?php echo $consultant['desc']; ?></p>
                                                 </div>
                                             </div>
                                         </div>
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
                                                     <img id="selfieWithKTPImage" src="<?= base_url('assets') ?>/image-with-card-id.jpg" class="img-fluid" alt="Selfie with KTP">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="card" style="padding: 10px;">
                                                 <div class="card-body text-center">
                                                     <h8 class="card-title"><small>E-KTP</small></h8>
                                                     <br><br>
                                                     <img id="ktpImage" src="<?= base_url('assets') ?>/image-card-id.jpg" class="img-fluid" alt="KTP">
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
                                                         <button type="submit" class="btn btn-primary">
                                                             <i class="ti ti-edit fs-5"></i>
                                                             Edit
                                                         </button>
                                                         <button type="button" class="btn btn-danger">
                                                             Cancel
                                                         </button>
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