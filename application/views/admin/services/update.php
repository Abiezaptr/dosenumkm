<div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Form Validation</h4>
                    <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website</a></h6>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form id="mainForm" action="<?= base_url('services/servicesControllers/update/' . $service['id']) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="hidden" name="id" value="<?= $service['id'] ?>">
                                        
                                        <div class="form-group">
                                            <h5>Service Category <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="category_id" id="select" required class="form-control">
                                                    <?php foreach ($categories as $category): ?>
                                                        <option value="<?= $category['id'] ?>" <?= ($category['id'] == $service['category_id']) ? 'selected' : '' ?>>
                                                            <?= $category['name'] ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <h5>Judul Service</h5>
                                            <div class="controls">
                                                <input type="text" name="title" class="form-control" value="<?= $service['title'] ?>" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <h5>Description</h5>
                                            <div class="controls">
                                                <textarea name="description" id="textarea" class="form-control" required><?= $service['description'] ?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <h5>Status</h5>
                                            <div class="controls">
                                                <fieldset>
                                                    <input name="status" type="radio" id="radio_1" value="1" <?= ($service['status'] == 1) ? 'checked' : '' ?> required>
                                                    <label for="radio_1">Aktif</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input name="status" type="radio" id="radio_2" value="0" <?= ($service['status'] == 0) ? 'checked' : '' ?>>
                                                    <label for="radio_2">Tidak Aktif</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <h5>Rating</h5>
                                            <div class="controls">
                                                <input type="text" name="rating" class="form-control" value="<?= $service['rating'] ?>" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <h5>Images</h5>
                                            <div class="controls">
                                            <?php if (!empty($service['images'])): ?>
                                                    <img src="<?= base_url() . $service['images'] ?>" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                                                <?php endif; ?>
                                                <input type="file" name="images" class="form-control mt-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-rounded btn-info mt-2">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
