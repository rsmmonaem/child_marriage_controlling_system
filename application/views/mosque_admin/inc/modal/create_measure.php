<?php $page_name = $this->uri->segment(2); ?>

<div class="modal create_measure" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <form action="<?= base_url() ?>super_admin/create_measure/" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">New Product Measure</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6" id="product_measure_name_id">
                            <div class="form-group">
                                <label for="field_measure_name" class="control-label"> Measure</label>
                                <input type="text" class="form-control" id="field_measure_name" name="measure_name">
                            </div>
                            <span class="error-message"></span>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Measure Code</label>
                                <?php $measure_code = mt_rand(100, 999); ?>
                                <input type="text" class="form-control" id="field-2" name="measure_code" value="MSR-<?= $measure_code ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-raised btn-primary ml-2" disabled>ADD</button>
                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>
</div>