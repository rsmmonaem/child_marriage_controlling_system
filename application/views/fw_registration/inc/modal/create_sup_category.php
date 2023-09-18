<?php $page_name = $this->uri->segment(2); ?>

<div class="modal create_sup_category" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <form action="<?= base_url() ?>super_admin/create_sup_category/<?= $page_name ?>" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">New Supply Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Supply Category</label>
                                <input type="text" class="form-control" id="field-1" name="supc_name" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Category Code</label>
                                <?php $supc_code = mt_rand(100, 999); ?>
                                <input type="text" class="form-control" id="field-2" name="supc_code" value="SUPC-<?= $supc_code ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="field-3" class="control-label">Lolation</label>
                                                                                <input type="text" class="form-control" id="field-3" name="location">
                                                                            </div>
                                                                        </div>
                                                                    </div> -->


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-raised btn-primary ml-2">ADD</button>
                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>


</div>