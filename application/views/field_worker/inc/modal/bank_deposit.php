<?php $page_name = $this->uri->segment(2); ?>

<?php $i = 1;
foreach ($this->osm->getonerow_bank() as $row) : ?>
<?php endforeach; ?>

<div class="modal bank_deposit<?= $row->b_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <form action="<?= base_url() ?>field_worker/bank_deposit/" method="post" enctype="multipart/form-data">
        <input type="hidden" name="b_id" value="<?= $row->b_id ?>">
        <input type="hidden" name="fw_id_no" value="<?= $user_id ?>">
        <input type="hidden" name="balance" value="<?= $row->balance ?>">



        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">Bank Deposit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Bank Name</label>
                                <input type="text" class="form-control" id="field-1" name="bank_name" required="" value="<?= $row->bank_name ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Branch Name</label>
                                <input type="text" class="form-control" id="field-2" name="branch_name" value="<?= $row->branch_name ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Account No.</label>
                                <input type="text" class="form-control" id="field-1" name="account_no" required="" value="<?= $row->account_no ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Account Name</label>
                                <input type="text" class="form-control" id="field-1" name="account_name" required="" value="<?= $row->account_name ?>" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Deposit Amount</label>
                                <input type="text" class="form-control" id="field-1" name="deposit_amount" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Deposit Slip#</label>
                                <input type="text" class="form-control" id="field-1" name="deposit_slip" required>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-raised btn-primary ml-2">Deposit</button>
                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>


</div>