<?php $page_name = $this->uri->segment(2); ?>

<div class="modal create_bank_details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <form action="<?= base_url() ?>super_admin/create_bank_details/<?= $page_name ?>" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">New Bank Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Bank Name</label>
                                <input type="text" class="form-control" id="field-1" name="bank_name" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Branch Name</label>
                                <?php //$zonal_code = mt_rand(100,999); 
                                ?>
                                <input type="text" class="form-control" id="field-2" name="branch_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Account No.</label>
                                <input type="text" class="form-control" id="field-1" name="account_no" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Account Name</label>
                                <input type="text" class="form-control" id="field-1" name="account_name" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Starting Balance</label>
                                <input type="number" step="0.01" class="form-control" id="field-1" name="starting_balance" required="">
                            </div>
                        </div>

                    </div>



                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-raised btn-primary ml-2">ADD</button>
                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>


</div>