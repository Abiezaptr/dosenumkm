  <br><br>
  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <div style="padding: 20px;">
                  <span style="display: block; margin-bottom: 20px; font-size: 15px; font-weight: bold;">Informasi dan Pengaturan</span>
                  <hr>
                  <ul style="list-style: none; padding: 0;">
                      <li style="margin-bottom: 10px;">
                          <a href="<?= site_url('settings') ?>" style="text-decoration: none; color: #000; display: flex; align-items: center; background-color: #e9f5ff; padding: 10px; border-radius: 4px;">
                              <span style="margin-right: 10px;"></span><i class="fa-regular fa-user"></i>&nbsp;&nbsp; Informasi akun
                          </a>
                      </li>
                      <li style="margin-bottom: 10px;">
                          <a href="<?= site_url('settings/contact') ?>" style="text-decoration: none; color: #000; display: flex; align-items: center; padding: 10px; border-radius: 4px;">
                              <span style="margin-right: 10px;"></span><i class="fa-regular fa-address-book"></i>&nbsp;&nbsp; Informasi kontak
                          </a>
                      </li>
                      <li style="margin-bottom: 10px;">
                          <a href="<?= site_url('settings/document') ?>" style="text-decoration: none; color: #000; display: flex; align-items: center; padding: 10px; border-radius: 4px;">
                              <span style="margin-right: 10px;"></span><i class="fa-regular fa-file-lines"></i>&nbsp;&nbsp; Informasi sebagai individu
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          <div class="col-md-9">
              <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border: 1px solid #ccc;">
                  <span style="margin-bottom: 3px;"><b>Informasi akun</b></span>
                  <p style="margin-bottom: 20px; color: #6c757d;">Atur informasi dasar akun Anda</p>
                  <hr>
                  <br>
                  <div style="display: flex; flex-direction: column; align-items: center; margin-bottom: 20px;">
                      <img src="<?= base_url('assets/logo.jpg') ?>" alt="Profile Image" style="width: 120px; height: 120px; border-radius: 50%; background-color: #e9f5ff; display: flex; align-items: center; justify-content: center; border: 1px solid #ccc;">
                      <button type="button" class="btn btn-sm btn-secondary" style="margin-top: 10px; padding: 5px 10px; background-color: #6c757d; border: none; border-radius: 4px; color: #fff;">Ubah</button>
                  </div>
                  <br>
                  <form>
                      <div class="form-group" style="margin-bottom: 15px;">
                          <label for="username" style="display: block; margin-bottom: 5px;">Username</label>
                          <input type="text" class="form-control" id="username" value="dosenumkm.id/user/wumzymiz" readonly style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                      </div>
                      <div class="form-group" style="margin-bottom: 15px;">
                          <label for="displayName" style="display: block; margin-bottom: 5px;">Nama yang digunakan untuk ditampilkan di sistem</label>
                          <input type="text" class="form-control" id="displayName" value="wumzymiz" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                          <small style="color: #6c757d;">Nama tersebut harus terdengar formal untuk membangun kredibilitas Anda</small>
                      </div>
                      <div style="text-align: right;">
                          <button type="submit" class="btn btn-primary" style="padding: 10px 20px; background-color: #007bff; border: none; border-radius: 4px; color: #fff;">Simpan</button>
                      </div>
                  </form>
              </div>

              <br>

              <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); display: flex; justify-content: space-between; align-items: center; border: 1px solid #ccc;">
                  <div>
                      <span style="font-weight: bold; display: block;">Password</span>
                      <a href="#" style="color: #6c757d; text-decoration: none;">Kelola password</a>
                  </div>
                  <button type="button" class="btn btn-primary" style="padding: 10px 20px; background-color: #007bff; border: none; border-radius: 4px; color: #fff;">Atur password</button>
              </div>
          </div>
      </div>
  </div>