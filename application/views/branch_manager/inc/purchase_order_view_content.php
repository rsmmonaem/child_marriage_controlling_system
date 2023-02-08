<?php include "breadcrumb.php"; ?>
<div class="row d-flex justify-content-center">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body invoice">
                <!-- <div class="float-right">
                                                <h6>Invoice : # 
                                                    <strong>23654789</strong>
                                                </h6>
                                                <h6 class="mb-0 ">Date : 11/05/2018</h6>
                                            </div> -->
                <div class="">
                    <h4 class="mb-0 align-self-center"><img src="<?= base_url() ?>assets/backend/images/logo.png" alt="s"></h4>
                </div>
                <div class="clearfix"> </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">

                        <div class="float-left mt-4">
                            <address>
                                <strong><?php echo "Store Keeper"; ?></strong><br>
                                <!-- <abbr title="Phone">P:</abbr> user_phone -->
                            </address>
                        </div>
                        <div class="float-right mt-4">
                            <?php $i = 1;
                            foreach ($this->po->getpurchase_order_no() as $row2) : ?>
                                <p><strong>PO Date: </strong> <?= $row2->created_date ?></p>
                                <p><strong>PO Status: </strong> <span class="badge badge-warning"><?= $row2->status ?></span></p>
                                <p><strong>PO ID: </strong> <?= $row2->po_no ?></p>
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
                                        <th>Product</th>
                                        <th>Cat</th>
                                        <th>Brand</th>

                                        <th>Next Level</th>
                                        <th>Status</th>

                                        <th>Quantity/s</th>
                                        <th>Msr</th>
                                        <th>Action</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($this->po->getpurchase_order_details() as $row) : ?>
                                        <tr>

                                            <td><?= $i++ ?></td>
                                            <td><?= $row->pro_name ?></td>
                                            <td><?= $row->procat_id ?></td>
                                            <td><?= $row->pro_brand ?></td>

                                            <td><?= $row->next_level ?></td>
                                            <td><?= $row->status ?></td>

                                            <td>
                                                <?php if ($row->next_level == "fao") {
                                                    echo $row->pro_qnty;
                                                } else { ?>
                                                    <form action="<?= base_url() ?>super_admin/purchase_order_view_update" method="post" enctype="multipart/form-data">
                                                        <input class="form-control " type="number" name="pro_qnty" value="<?= $row->pro_qnty ?>">

                                                        <input type="hidden" name="po_id" value="<?= $row->po_id ?>">
                                                        <input type="hidden" name="po_no" value="<?= $row->po_no ?>">
                                                        <button type="submit" class="btn btn-secondary text-light">UPDATE</button>
                                                    </form>
                                                <?php } ?>
                                            </td>
                                            <td><?= $row->qnty_messure ?></td>
                                            <td>
                                                <?php if ($row->status == "reject") { ?>
                                                    <form action="<?= base_url() ?>super_admin/purchase_order_view_approve" method="post" enctype="multipart/form-data">

                                                        <input type="hidden" name="po_id" value="<?= $row->po_id ?>">
                                                        <input type="hidden" name="po_no" value="<?= $row->po_no ?>">

                                                        <button type="submit" class="btn btn-success text-light">APPROVE</button>
                                                    </form>
                                                <?php  } else { ?>
                                                    <form action="<?= base_url() ?>super_admin/purchase_order_view_reject" method="post" enctype="multipart/form-data">

                                                        <input type="hidden" name="po_id" value="<?= $row->po_id ?>">
                                                        <input type="hidden" name="po_no" value="<?= $row->po_no ?>">

                                                        <button type="submit" class="btn btn-danger text-light">REJECT</button>
                                                    </form>
                                                <?php } ?>
                                            </td>


                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="row" style="border-radius: 0px;">
                    <!-- <div class="col-md-9">
                                                    <p><strong>Terms And Condition : </strong></p>
                                                    <ul class="pl-3">
                                                        <li><small>TQ1 </small></li>
                                                        <li><small>TQ2</small></li>
                                                        <li><small> TQ3<br></small></li>                                            
                                                    </ul>
                                                </div> -->
                    <div class="col-md-3">
                        <p class="text-right"></p>

                        <hr>
                        <h4 class="text-right mb-0"><!-- Total:2930.00 --></h4>
                    </div>
                </div><!--end row-->

                <hr>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                        <div class="text-center text-muted"><small>Design And Developed By Inleads IT Solution Ltd!</small></div>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <div class="d-print-none float-right">
                            <a href="javascript:window.print()" class="btn btn-info text-light"><i class="fas fa-print"></i></a>
                            <!-- <a href="#" class="btn btn-primary text-light">Submit</a> -->
                            <a href="<?= base_url() ?>super_admin/purchase_order_list" class="btn btn-warning text-light">Return</a>
                        </div>
                        <?php if ($row2->next_level != "admin") { ?>

                            <b style=color:red>Approval N/A Or COMPLITED</b>
                        <?php } else { ?>
                    </div>

                    <form action="<?= base_url() ?>super_admin/purchase_order_approved" method="post" enctype="multipart/form-data">


                        <input type="hidden" name="po_no" value="<?= $row->po_no ?>">
                        <input type="hidden" name="status" value="<?= $row->status ?>">

                        <button type="submit" class="btn btn-primary text-light">APPROVED</button>

                    </form>

                    <form action="<?= base_url() ?>super_admin/purchase_order_reject" method="post" enctype="multipart/form-data">
                        <?php //$req_no = mt_rand(1000,9999); 
                        ?>

                        <input type="hidden" name="po_no" value="<?= $row->po_no ?>">
                        <button type="submit" class="btn btn-danger text-light">REJECT</button>

                    </form>

                <?php } ?>

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