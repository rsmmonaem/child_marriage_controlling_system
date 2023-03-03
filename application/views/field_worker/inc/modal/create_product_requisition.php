<?php $page_name = $this->uri->segment(2); ?>

<div class="modal create_product_requisition" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

    <form action="<?= base_url() ?>field_worker/create_product_requisition/<?= $page_name ?>" method="post" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalform">Request Product Stock</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pro_id" class="control-label">Select Product</label>
                                <select class="form-control" name="pro_id" id="request_product_id" required>
                                    <option value='' selected disabled hidden>Select Here</option>
                                    <?php foreach ($this->imm->getproduct_name() as $row) : ?>
                                        <option value="<?= $row->pro_id ?>">
                                            <?= $row->pro_name ?>
                                            <?php 
                                                // $this->db->where('sup_id', $row->sup_id);
                                                // echo "( Supplier: ".$supplier = $this->db->get("supplier")->row('sup_name').")";
                                            ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="request_product_stock_input">

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>