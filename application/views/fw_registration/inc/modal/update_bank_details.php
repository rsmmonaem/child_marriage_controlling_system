<?php $page_name = $this->uri->segment(2); ?>

<?php $i = 1;
foreach ($this->osm->getonerow_bank() as $row) : ?>
<?php endforeach; ?>

<div class="modal update_bank_details<?= $row->b_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <form action="<?= base_url() ?>super_admin/update_bank_details/<?= $row->b_id ?>" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">Update Bank Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Bank Name</label>
                                <input type="text" class="form-control" id="field-1" name="bank_name" required="" value="<?= $row->bank_name ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Branch Name</label>
                                <input type="text" class="form-control" id="field-2" name="branch_name" value="<?= $row->branch_name ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Account No.</label>
                                <input type="text" class="form-control" id="field-1" name="account_no" required="" value="<?= $row->account_no ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Account Name</label>
                                <input type="text" class="form-control" id="field-1" name="account_name" required="" value="<?= $row->account_name ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Balance</label>
                                <input type="text" class="form-control" id="field-1" name="balance" required="" value="<?= $row->balance ?>" readonly>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-raised btn-primary ml-2">Update</button>
                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>


</div>