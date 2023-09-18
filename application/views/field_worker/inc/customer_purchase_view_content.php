<?php include "breadcrumb.php"; ?>

<?php

$cp_no = $this->uri->segment(3);
$this->db->where('cp_no', $cp_no);
$query = $this->db->get("customer_purchase")->result();
foreach ($query as $row) {
    $cm_id_no = $row->cm_id_no;
    $fw_id_no = $row->fw_id_no;
}

$this->db->where('cm_id_no', $cm_id_no);
$query2 = $this->db->get("customer")->result();

foreach ($query2 as $row2) {
    $customer = $row2->customer;
    $branch_office = $row2->branch_office;
    $cont_num = $row2->cont_num;
    $email = $row2->email;
    $address = $row2->cm_present_add;
}

$this->db->where('fw_id_no', $fw_id_no);
$query4 = $this->db->get("field_worker")->result();

foreach ($query4 as $row4) {
    $field_worker = $row4->field_worker;
    $branch_office = $row4->branch_office;
    $fw_cont_num = $row4->cont_num;
    $branch_code = $row4->branch_code;
}

?>

<div class="row d-flex justify-content-center">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body invoice">
                <div class="float-right">
                    <h6>Purchase No : #<strong><?= $cp_no ?></strong>
                    </h6>
                    <h6 class="mb-0 ">Date : <?= implode('-', array_reverse(explode('-', explode(' ', $row->created_date)[0]))); ?></h6>
                </div>
                <div class="">
                    <h4 class="mb-0 align-self-center"><img src="<?= base_url() ?>assets/backend/images/logo.png" alt="s"></h4>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-left mt-4">
                            <address>
                                <b>Customer Details</b><br>
                                <strong><?php echo $customer; ?></strong><br>
                                <abbr title="Phone">P: <?= $cont_num ?></abbr><br>
                                <strong><?php echo $address; ?></strong>
                            </address>
                        </div>
                        <div class="float-right mt-4">
                            <address>
                                <b>Field Worker Details</b><br>
                                <strong><?php echo $field_worker; ?></strong><br>
                                <abbr title="Phone">P: <?= $fw_cont_num ?></abbr><br>
                                <strong>ID: <?php echo $fw_id_no; ?></strong><br>
                                <strong>Branch: <?php echo $branch_office; ?></strong>
                            </address>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="row">
                    <div class="text-center mt-4 w-100">
                        <strong style="text-decoration: underline">Purchase Details</strong>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table mt-4">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Purchase</th>
                                        <th>Payment</th>
                                        <th>Due</th>
                                        <th>Next Pay</th>
                                        <th>Status</th>
                                        <th>Next level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($this->urm->getonerow_cp_no() as $row5) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $row5->pro_name ?></td>
                                            <td><?= $row5->sell_price ?></td>
                                            <td><?= $row5->purchase_qty ?></td>
                                            <td><?= $row5->purchase_total ?></td>
                                            <td><?= $row5->down_payment ?></td>
                                            <td><?= $row5->pay_due ?></td>
                                            <!-- <td><?php // $row5->next_pay_date 
                                                        ?></td> -->
                                            <td><?= implode('-', array_reverse(explode('-', $row5->next_pay_date))); ?></td>
                                            <td><?= $row5->status ?></td>
                                            <td><?= $row5->next_level ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="row">
                    <div class="text-center mt-2 w-100">
                        <strong style="text-decoration: underline">Installment Details</strong>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table mt-4">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Instl. No</th>
                                        <th>Instl. Pay</th>
                                        <th>Product</th>
                                        <th>Purchase</th>
                                        <th>Payment</th>
                                        <th>Due</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($this->urm->get_purchase_installment_history() as $rowData) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= implode('-', array_reverse(explode('-', explode(" ",$rowData->payment_date)[0]))); ?></td>
                                            <td><?= $rowData->instl_no ?></td>
                                            <td><?= $rowData->instl_pay ?></td>
                                            <td><?= $rowData->pro_name ?></td>
                                            <td><?= $rowData->purchase_total ?></td>
                                            <td><?= $rowData->down_payment ?></td>
                                            <td><?= $rowData->pay_due ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end row-->

                <div class="row my-4">
                    <div class="d-flex justify-content-between w-100 mx-4">
                        <div class="float-left mt-4">
                            <b>Customer Signature</b><br>
                        </div>
                        <div class="float-right mt-4">
                            <b>Field Worker Signature</b><br>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                        <div class="text-center text-muted"><small>Design And Developed By Inleads IT Solution Ltd!</small></div>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <div class="d-print-none float-right">
                            <a href="javascript:window.print()" class="btn btn-info text-light"><i class="fas fa-print"></i></a>
                            <a href="<?= base_url() ?>field_worker/customer_profile/<?= $row5->cm_id_no ?>" class="btn btn-warning text-light">Return</a>
                        </div>
                        <?php if ($row->next_level == "N/A") { ?>
                            <b style=color:green>Approved</b>
                        <?php } else { ?>
                            <b style=color:red>Pending for Admin Approval</b>
                        <?php } ?>
                    </div>
                </div>
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