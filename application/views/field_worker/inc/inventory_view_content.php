<?php include "breadcrumb.php"; ?>
<div class="row d-flex justify-content-center">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body invoice">
                <?php $i = 1;
                foreach ($this->imm->getonerow_inventory_list() as $row) : ?>
                    <div class="float-right">
                        <h6>Inventory : #
                            <strong><?= $row->inventory_no ?></strong>
                        </h6>
                        <h6 class="mb-0 ">Date : <?= $row->created_date ?></h6>
                    </div>

                    <div class="">
                        <h4 class="mb-0 align-self-center"><img src="<?= base_url() ?>assets/backend/images/logo.png" alt="s"></h4>
                    </div>
                    <div class="clearfix"> </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="float-left mt-4">
                                <?php
                                $this->db->where('sup_id', $row->sup_id);
                                $sup_name = $this->db->get("supplier")->row("sup_name");
                                $cont_num = $this->db->get("supplier")->row("cont_num");
                                $sup_address = $this->db->get("supplier")->row("sup_address");

                                ?>
                                <address>
                                    <strong><?= $sup_name ?></strong> <br>
                                    <abbr title="Phone">P: <?= $cont_num ?></abbr> <br> <?= $sup_address ?>
                                </address>
                            </div>
                            <div class="float-right mt-4">

                                <p><strong>Invoice Date: </strong> <?= $row->invoice_date ?></p>
                                <p><strong>Invoice#: <?= $row->invoice_no ?></strong></p>

                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Quantity/s</th>
                                            <th>Price</th>
                                            <th>Total</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($this->imm->getonerow_inventory_details() as $row) : ?>
                                            <tr>

                                                <td><?= $i++ ?></td>
                                                <?php
                                                $this->db->where('pro_id', $row->pro_id);
                                                $pro_name = $this->db->get("product_name")->row("pro_name"); ?>
                                                <td><?= $pro_name ?></td>
                                                <td><?= $row->procat_id ?></td>
                                                <td><?= $row->pro_qnty ?>-<?= $row->measure ?></td>
                                                <td><?= $row->qnty_price ?></td>
                                                <td><?= $row->total_price ?></td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="row" style="border-radius: 0px;">

                        <div class="col-md-9">
                            <p><strong>Terms And Condition : </strong></p>
                            <ul class="pl-3">
                                <li><small>TQ1 </small></li>
                                <li><small>TQ2</small></li>
                                <li><small> TQ3<br></small></li>
                            </ul>
                        </div>


                        <?php $i = 1;
                        foreach ($this->imm->getonerow_inventory_list() as $row) : ?>
                            <div class="col-md-3">
                                <p class="text-right"><strong>Intotal:</strong> <?= $row->intotal ?></p>
                                <p class="text-right">Commission: <?= $row->commission ?></p>
                                <p class="text-right">Sub-Total: <?= $row->sub_total ?></p>
                                <p class="text-right">Payment: <?= $row->payment ?> By <?= $row->pay_sys ?></p>
                                <p class="text-right">Due: <?= $row->due ?></p>

                                <hr>
                                <h4 class="text-right mb-0"><?= $row->sub_total ?> ৳</h4>
                            </div>

                        <?php endforeach; ?>
                    </div><!--end row-->

                    <hr>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                            <div class="text-center text-muted"><small>Design And Developed By Inleads IT Solution Ltd !</small></div>
                        </div>
                        <div class="col-lg-12 col-xl-4">
                            <div class="d-print-none float-right">
                                <a href="javascript:window.print()" class="btn btn-info text-light"><i class="fas fa-print"></i></a>
                                <a href="<?= base_url() ?>super_admin/inventory_list" class="btn btn-warning text-light">RETURN</a>

                            </div>
                        </div>




                    </div>

            </div>
        </div>
    </div>
</div><!--end row-->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->



<?php include "modal/create_pro_category.php" ?>