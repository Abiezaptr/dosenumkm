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
                        <a href="<?= site_url('settings/contact') ?>" style="text-decoration: none; color: #000; display: flex; align-items: center; padding: 10px; border-radius: 4px;">
                            <span style="margin-right: 10px;"></span><i class="fa-regular fa-address-book"></i>&nbsp;&nbsp; Informasi kontak
                        </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                        <a href="#" style="text-decoration: none; color: #000; display: flex; align-items: center; background-color: #e9f5ff; padding: 10px; border-radius: 4px;">
                            <span style="margin-right: 10px;"></span><i class="fa-regular fa-file-lines"></i>&nbsp;&nbsp; Informasi sebagai individu
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border: 1px solid #ccc;">
                <span style="margin-bottom: 3px;"><b>Informasi sebagai individu</b></span>
                <p style="margin-bottom: 20px; color: #6c757d;">Sebagai data untuk individu</p>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="firtsName" style="display: block; margin-bottom: 5px;">Nama depan</label>
                                <input type="text" class="form-control" id="firtsName" value="Abieza" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label for="lastName" style="display: block; margin-bottom: 5px;">Nama belakang</label>
                                <input type="text" class="form-control" id="lastName" value="Syahdilla" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
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