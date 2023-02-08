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
                        <?php $i = 1;
                        foreach ($this->rm->getrequisition_reqno_admin() as $row) : ?>

                            <?php
                            $user_name = $row->user_name;
                            $this->db->where('user_id', $user_name);
                            $full_name = $this->db->get("admin_user")->row()->full_name;
                            $this->db->where('user_id', $user_name);
                            $user_type = $this->db->get("admin_user")->row()->user_type;
                            if ($user_type == "common_user") {
                                $this->db->where('user_id', $user_name);
                                $unit_name = $this->db->get("common_user")->row()->unit_name;
                                $this->db->where('user_id', $user_name);
                                $department = $this->db->get("common_user")->row()->department;
                                $this->db->where('user_id', $user_name);
                                $cont_num = $this->db->get("common_user")->row()->cont_num;
                            }

                            ?>
                            <div class="float-left mt-4">
                                <address>
                                    <strong><?php echo $full_name ?></strong><br>
                                    <?= $unit_name ?>-<?= $department ?><br>
                                    <abbr title="Phone">P:</abbr> <?= $cont_num ?>
                                </address>
                            </div>
                            <div class="float-right mt-4">

                                <p><strong>Order Date: </strong> <?= $row->created_date ?></p>
                                <p><strong>Order Status: </strong> <span class="badge badge-warning"><?= $row->status ?></span></p>
                                <p><strong>Order ID: </strong> <?= $row->req_no ?></p>
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
                                        <th>Quantity/s</th>
                                        <th>Msr</th>

                                        <th>Qnty Price</th>
                                        <th>Total Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($this->rm->getrequisition_reqno_details_unit_head() as $row) : ?>
                                        <tr>

                                            <td><?= $i++ ?></td>
                                            <?php
                                            $pro_id = $row->pro_id;
                                            $this->db->where('pro_id', $pro_id);
                                            $pro_name = $this->db->get("product_name")->row()->pro_name;
                                            ?>
                                            <td><?= $pro_name ?></td>
                                            <td><?= $row->procat_id ?></td>
                                            <td><?= $row->pro_brand ?></td>

                                            <td><?= $row->next_level ?></td>
                                            <td>
                                                <?php if ($row->next_level == "complited") {
                                                    echo $row->pro_qnty;
                                                } else { ?>
                                                    <form action="<?= base_url() ?>super_admin/requisition_view_update" method="post" enctype="multipart/form-data">
                                                        <input class="form-control " type="number" name="pro_qnty" value="<?= $row->pro_qnty ?>">
                                                        <input type="hidden" name="pro_id" value="<?= $pro_id ?>">
                                                        <input type="hidden" name="qnty_price" value="<?= $row->qnty_price ?>">
                                                        <input type="hidden" name="req_no" value="<?= $row->req_no ?>">
                                                        <button type="submit" class="btn btn-secondary text-light">UPDATE</button>
                                                    </form>
                                                <?php } ?>
                                            </td>


                                            <td><?= $row->qnty_messure ?></td>
                                            <td><?= $row->qnty_price ?></td>
                                            <td><?= $row->total_price ?></td>
                                        </tr>
                                        <?php $req_no = $row->req_no; ?>
                                    <?php endforeach; ?>
                                    <?php
                                    $this->db->where('req_no', $req_no);
                                    $intotal_price = $this->db->get("submit_requisition")->row()->intotal_price;
                                    ?>
                                    <tr>

                                        <td></td>

                                        <td></td>
                                        <td></td>
                                        <td></td>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b>Intotal</b></td>
                                        <td><b><?= $intotal_price ?></b></td>
                                    </tr>
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
                            <a href="<?= base_url() ?>super_admin/requisition_list" class="btn btn-warning text-light">RETURN</a>

                        </div>
                    </div>
                    <?php if ($row->next_level != "admin") { ?>

                        <b style=color:red>Approval N/A Or COMPLITED</b>
                    <?php } else { ?>
                        <form action="<?= base_url() ?>super_admin/requisition_approved" method="post" enctype="multipart/form-data">
                            <?php //$req_no = mt_rand(1000,9999); 
                            ?>

                            <input type="hidden" name="req_no" value="<?= $row->req_no ?>">
                            <button type="submit" class="btn btn-primary text-light">APPROVED</button>

                        </form>

                        <form action="<?= base_url() ?>super_admin/requisition_reject" method="post" enctype="multipart/form-data">
                            <?php //$req_no = mt_rand(1000,9999); 
                            ?>

                            <input type="hidden" name="req_no" value="<?= $row->req_no ?>">
                            <button type="submit" class="btn btn-danger text-light">REJECT</button>

                        </form>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</div><!--end row-->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->



<?php include "modal/create_pro_category.php" ?>