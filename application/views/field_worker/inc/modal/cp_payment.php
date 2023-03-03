<?php $page_name = $this->uri->segment(2); ?>

<div class="modal cp_payment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal_cp_payment">
    <form action="<?= base_url() ?>field_worker/cp_payment/<?= $page_name ?>" method="post" enctype="multipart/form-data">
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Purchase Details</label>
                                <select class="form-control" name="cp_no" id="modal_cp_no" required>
                                    <option value="" selected="" disabled="" hidden="">Choose here</option>
                                    <?php foreach ($this->urm->get_purchase_due_payment() as $row) : ?>
                                        <option value="<?= $row->cp_no ?>"><?= $row->pro_name ?> (Pay Date: <?= implode("-", array_reverse(explode("-", $row->next_pay_date))); ?>)</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12" id="product_instl_payment_details">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>