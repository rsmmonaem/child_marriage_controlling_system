<?php include "breadcrumb.php"; ?>
<div class="row d-flex justify-content-center">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body invoice">
                <?php $i = 1;
                foreach ($this->omm->getonerow_order_list() as $row) : ?>
                    <div class="float-right">
                        <h6>Order : #
                            <strong><?= $row->order_no ?></strong>
                        </h6>
                        <h6 class="mb-0 ">Date : <?= $row->order_date ?></h6>
                    </div>

                    <?php
                    $this->db->where('company_code', $row->company_code);
                    $com_logo = $this->db->get("company_list")->row("com_logo");
                    ?>
                    <div class="">
                        <h4 class="mb-0 align-self-center"><img src="<?= base_url() ?>uploads/company/<?= $com_logo ?>" alt="s"></h4>
                    </div>
                    <div class="clearfix"> </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="float-left mt-4">
                                <?php
                                $this->db->where('dis_code', $row->dis_code);
                                $distributor = $this->db->get("distributor")->row("distributor");
                                $cont_num = $this->db->get("distributor")->row("cont_num");
                                $address = $this->db->get("distributor")->row("dis_address");

                                ?>
                                <address>
                                    <strong><?= $distributor ?></strong> <br>
                                    <abbr title="Phone">P: <?= $cont_num ?></abbr> <br> <?= $address ?>
                                </address>
                            </div>
                            <div class="float-right mt-4">

                                <p><strong>Order Date: </strong> <?= $row->order_date ?></p>


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
                                            <th>Quantity/s</th>
                                            <th>Price</th>
                                            <th>Total</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($this->omm->getonerow_order_details() as $row) : ?>
                                            <tr>

                                                <td><?= $i++ ?></td>
                                                <?php
                                                $this->db->where('pro_id', $row->pro_id);
                                                $pro_name = $this->db->get("product_name")->row("pro_name"); ?>
                                                <td><?= $pro_name ?></td>

                                                <td><?= $row->pro_qnty ?>-<?= $row->measure ?></td>
                                                <td><?= $row->sell_price ?></td>
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
                        foreach ($this->omm->getonerow_order_list() as $row) : ?>
                            <div class="col-md-3">
                                <p class="text-right"><strong>Intotal:</strong> <?= $row->intotal ?></p>
                                <p class="text-right">Commission (<?= $row->commission_per ?>%): <?= $row->commission ?></p>
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
                                <a href="<?= base_url() ?>super_admin/order_list" class="btn btn-warning text-light">RETURN</a>

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