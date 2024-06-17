 <div class="body-wrapper">
     <div class="container-fluid">
         <section>
             <div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-body wizard-content">
                             <h6 class="card-subtitle mb-3"></h6>
                             <form action="" class="tab-wizard wizard-circle">
                                 <!-- Step 1 -->
                                 <h6><b>Profil konsultan</b> <br><small>Berikan informasi dasar untuk membangun kredibilitas Anda</small></h6>
                                 <section>
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="mb-3">
                                                 <label><b>Username</b></label>
                                                 <p><small>Tidak dapat diedit (karena mempengaruhi pencarian Google untuk halaman pekerjaan Anda)</small></p>
                                                 <input type="text" class="form-control" name="name" value="dosenumkm.id/user/wumzymiz" readonly />
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row mt-2">
                                         <div class="col-md-12">
                                             <div class="mb-3">
                                                 <label><b>Nama yang digunakan untuk ditampilkan di sistem</b></label>
                                                 <p><small>Nama tersebut harus terdengar formal untuk membangun kredibilitas Anda</small></p>
                                                 <input type="text" class="form-control" name="name" value="wumzymiz" />
                                             </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="mb-3">
                                                 <label><b>Tipe konsultan (Tidak ditampilkan di sistem)</b></label>
                                                 <p><small>Pilih yang sesuai dengan kenyamanan Anda. Jika Anda masih pelajar, pilih part-time.</small></p>
                                                 <div class="btn-group" role="group" aria-label="Consultant Type">
                                                     <input type="radio" class="btn-check" name="type" id="partTime" autocomplete="off" value="part-time">
                                                     <label class="btn btn-outline-primary" for="partTime">Part-time</label>

                                                     <input type="radio" class="btn-check" name="type" id="fullTime" autocomplete="off" value="full-time">
                                                     <label class="btn btn-outline-primary" for="fullTime">Full-time</label>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </section>
                                 <!-- Step 2 -->
                                 <h6><b>Tentang konsultan</b> <br><small>Bagikan riwayat pekerjaan Anda seperti pengalaman kerja dan latar belakang</small></h6>
                                 <section>
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="mb-3">
                                                 <label><b>Tentang konsultan</b></label>
                                                 <textarea name="desc" rows="6" class="form-control" placeholder="Tonjolkan kelebihan Anda secara umum untuk membantu calon pembeli untuk mempertimbangkan layanan atau produk yang Anda tawarkan."></textarea>
                                             </div>
                                         </div>
                                     </div>
                                 </section>
                                 <!-- Step 3 -->
                                 <h6><b>Identitas konsultan</b> <br><small>Upload data selfie dan ktp anda untuk dapat diverifikasi</small></h6>
                                 <section>
                                     <div class="row">
                                         <div class="col-md-4 offset-md-2">
                                             <div class="card" style="padding: 10px;">
                                                 <div class="card-body text-center">
                                                     <h5 class="card-title">foto selfie dengan KTP</h5>
                                                     <img id="selfieWithKTPImage" src="<?= base_url('assets') ?>/image-with-card-id.jpg" class="img-fluid" alt="Selfie with KTP">
                                                     <input type="file" id="selfieWithKTPInput" name="selfie_file" style="display: none;" onchange="updateImage('selfieWithKTPInput', 'selfieWithKTPImage')">
                                                     <button class="btn btn-rounded btn-outline-primary mt-3 w-100" onclick="document.getElementById('selfieWithKTPInput').click();">upload foto</button>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="card" style="padding: 10px;">
                                                 <div class="card-body text-center">
                                                     <h5 class="card-title">foto KTP</h5>
                                                     <img id="ktpImage" src="<?= base_url('assets') ?>/image-card-id.jpg" class="img-fluid" alt="KTP">
                                                     <input type="file" id="ktpInput" name="ktp_file" style="display: none;" onchange="updateImage('ktpInput', 'ktpImage')">
                                                     <button class="btn btn-rounded btn-outline-primary mt-3 w-100" onclick="document.getElementById('ktpInput').click();">upload foto</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </section>
                                 <!-- Step 4 -->
                                 <h6><b>Pelampiran dokumen</b> <br><small>Cek kembali kelengkapan data anda sebelum menyimpan</small></h6>
                                 <section>
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="mb-3">
                                                 <label><b>Gelar</b></label>
                                                 <select class="form-control" name="gelar" required>
                                                     <option hidden>Silakan mengisi data</option>
                                                     <option value="Bapak">Bapak</option>
                                                     <option value="Ibu">Ibu</option>
                                                     <option value="Nona">Nona</option>
                                                     <option value="Tuan">Tuan</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="mb-3">
                                                 <label><b>Nama depan</b></label>
                                                 <input type="text" name="nama_depan" class="form-control" placeholder="Masukan nama depan dan nan" />
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="mb-3">
                                                 <label><b>Nama belakang</b></label>
                                                 <input type="text" name="nama_belakang" class="form-control" placeholder="Masukan nama belakang" />
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="mb-3">
                                                 <label><b>Nomor KTP (NIK)</b></label>
                                                 <input type="text" class="form-control" name="no_ktp" placeholder="Masukan 16 digit nomor KTP" />
                                             </div>
                                         </div>

                                         <div class="col-md-6">
                                             <div class="mb-3">
                                                 <label><b>Domisili</b></label>
                                                 <input type="text" class="form-control" name="domisili" placeholder="Masukan 16 digit nomor KTP" />
                                             </div>
                                         </div>
                                         <div class="col-md-12">
                                             <div class="mb-3">
                                                 <label><b>Alamat lengkap</b></label>
                                                 <input type="text" class="form-control" name="alamat" placeholder="Masukan alamat detail Anda" />
                                             </div>
                                         </div>
                                     </div>
                                 </section>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </div>
 </div>
 <div class="dark-transparent sidebartoggler"></div>
 </div>