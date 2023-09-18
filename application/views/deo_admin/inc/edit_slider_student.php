<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>deo_admin/slider_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Slider List
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h2>Update Slider</h2>
    </div>
    <div class="card-body">
        <form action="<?= base_url('deo_admin/update_slider/'.$data->slider_id)?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Slider Title
                            </label>
                            <input type="text" class="form-control" id="field-1" name="slider_title" value="<?= $data->slider_title ?>" required="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-2" class="control-label">Slider Category</label>
                            <input type="text" class="form-control" id="field-2" name="slider_category" value="<?= $data->slider_category ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Slider Image</label>
                            <input type="hidden" name="old_image" value="<?= $data->slider_image ?>">
                            <input type="file" class="form-control" id="field-6" name="slider_image" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Existing Image</label>
                            <img class="img-fluid" style="width:150px; height:150px;" src="<?= base_url() ?>uploads/slider/<?= $data->slider_image ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Description</label>
                            <textarea name="slider_description" class="form-control" id="" cols="10" rows="5"><?= $data->slider_description ?></textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-raised btn-primary ml-2">Update</button>
            </div>
        </form>

    </div>
</div>
</div>
