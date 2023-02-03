<?php $page_name = $this->uri->segment(2); ?>

<div class="modal cp_payment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <form action="<?= base_url() ?>field_worker/cp_payment/<?= $page_name ?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="cm_id_no">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">Purchase Payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="field-1" class="control-label">Purchase Details</label>

                                <select class="form-control" name="cp_no" required>

                                    <?php foreach ($this->urm->getonerow_purchase() as $row) : ?>
                                        <option value="<?= $row->cp_no ?>"><?= $row->pro_name ?>_Due_<?= $row->due_payment ?> Tk.</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Payment</label>
                                <input type="text" class="form-control" id="field-2" name="payment" required="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Next Pay</label>

                                <input type="date" class="form-control" id="field-2" name="next_pay">
                            </div>
                        </div>






                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-raised btn-primary ml-2">Pay</button>
                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </form>


</div>