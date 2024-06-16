<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div style="padding: 20px;">
                <span style="display: block; margin-bottom: 20px; font-size: 15px; font-weight: bold;">Informasi dan Pengaturan</span>
                <hr>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-bottom: 10px;">
                        <a href="<?= site_url('settings') ?>" style="text-decoration: none; color: #000; display: flex; align-items: center; padding: 10px; border-radius: 4px;">
                            <span style="margin-right: 10px;"></span><i class="fa-regular fa-user"></i>&nbsp;&nbsp; Informasi akun
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="<?= site_url('settings/contact') ?>" style="text-decoration: none; color: #000; display: flex; align-items: center; background-color: #e9f5ff; padding: 10px; border-radius: 4px;">
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
                <span style="margin-bottom: 3px;"><b>Informasi kontak</b></span>
                <p style="margin-bottom: 20px; color: #6c757d;">Agar kami dapat menghubungi Anda</p>
                <hr>
                <form>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="email" style="display: block; margin-bottom: 5px;">Kontak email</label>
                        <div style="display: flex; align-items: center;">
                            <input type="email" class="form-control" id="email" value="abieza.eresha@gmail.com" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; margin-right: 10px;" readonly>
                            <button type="button" class="btn btn-light">Ubah</button>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="phone" style="display: block; margin-bottom: 5px;">Kontak telepon</label>
                        <div style="display: flex; align-items: center;">
                            <input type="text" class="form-control" id="phone" placeholder="Masukan nomor telepon" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; margin-right: 10px;">
                            <button type="button" class="btn btn-primary">Konfirmasi</button>
                        </div>
                        &nbsp;<small style="color: #6c757d;">Jika menggunakan nomor luar negeri, silahkan hubungi customer service kami untuk memverifikasi.</small>
                    </div>
                </form>
            </div>

            <br>

            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border: 1px solid #ccc;">
                <span style="margin-bottom: 3px;"><b>Informasi alamat</b></span>
                <p style="margin-bottom: 20px; color: #6c757d;">Sebagai data jika suatu saat kami perlu mengirimkan sesuatu dan dokumen kepada Anda</p>
                <hr>
                <form>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="currentAddress" style="display: block; margin-bottom: 5px;">Alamat sekarang</label>
                        <div class="btn-group" role="group" aria-label="Alamat sekarang">
                            <input type="radio" class="btn-check" id="indonesia" name="currentAddress" value="Indonesia" checked>
                            <label class="btn btn-outline-primary" for="indonesia">Indonesia</label>
                            <input type="radio" class="btn-check" id="abroad" name="currentAddress" value="Di luar negeri">
                            <label class="btn btn-outline-primary" for="abroad">Di luar negeri</label>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="fullAddress" style="display: block; margin-bottom: 5px;">Alamat lengkap</label>
                        <input type="text" class="form-control" id="fullAddress" placeholder="Masukan alamat detail Anda" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="postalCode" style="display: block; margin-bottom: 5px;">Kode pos</label>
                                <input type="text" class="form-control" id="postalCode" placeholder="Kode Pos" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="subDistrict" style="display: block; margin-bottom: 5px;">Kelurahan</label>
                                <input type="text" class="form-control" id="subDistrict" placeholder="Masukan kecamatan" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="district" style="display: block; margin-bottom: 5px;">Kecamatan</label>
                                <input type="text" class="form-control" id="district" placeholder="Masukan kabupaten" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="city" style="display: block; margin-bottom: 5px;">City</label>
                                <input type="text" class="form-control" id="city" placeholder="Masukan kota" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="text-align: right;">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>