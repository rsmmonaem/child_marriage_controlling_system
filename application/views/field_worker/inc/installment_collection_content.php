<?php include "breadcrumb.php"; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="heading">
                        <h4 class="mt-0 header-title">Installment Collection <span class="badge badge-success">Today</span></h4>
                    </div>
                    <div class="current-date-search">
                        <strong>Showing Result For: <?= implode("-", array_reverse(explode("-", date('Y-m-d')))); ?></strong>
                    </div>
                </div>
                <?php
                     $num_rows = $this->urm->get_installment_collection_by_date();
                     if($num_rows != "NOT_FOUND"){
                ?>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th><strong>Date</strong></th>
                            <th>Purchase No</th>
                            <th>Product</th>
                            <th>Purchase</th>
                            <th>Payment</th>
                            <th><strong>Due</strong></th>
                            <th>Pay Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($this->urm->get_installment_collection_by_date() as $row) : ?>
                            <tr>
                                <td><strong><?= implode("-", array_reverse(explode("-", $row->next_pay_date))); ?></strong></td>
                                <td><a target="_blank" href="<?= base_url() ?>field_worker/customer_profile/<?= $row->cm_id_no ?>" type="button" class="btn btn-success">
                                        #<?= $row->cp_no ?>
                                    </a></td>
                                <td><?= $row->pro_name ?></td>
                                <td><?= $row->purchase_total ?></td>
                                <td><?= $row->down_payment ?></td>
                                <td><strong><?= $row->pay_due ?></strong></td>
                                <td><?= $row->pay_status ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php
                }else{
                    echo "<div class='text-center'><h5 class='mt-4'><strong>No Collection For Today</strong></h5></div>";
                }
                ?>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="heading">
                        <h4 class="mt-0 header-title">Installment Collection <span class="badge badge-secondary">Upcoming</span></h4>
                    </div>
                </div>
                <?php
                     $num_rows = $this->urm->get_installment_upcoming_collection_by_date();
                     if($num_rows != "NO_COLLECTION_FOUND"){
                ?>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th><strong>Date</strong></th>
                            <th>Purchase No</th>
                            <th>Product</th>
                            <th>Purchase</th>
                            <th>Payment</th>
                            <th><strong>Due</strong></th>
                            <th>Pay Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($this->urm->get_installment_upcoming_collection_by_date() as $row) : ?>
                            <tr>
                                <td><strong><?= implode("-", array_reverse(explode("-", $row->next_pay_date))); ?></strong></td>
                                <td><a target="_blank" href="<?= base_url() ?>field_worker/customer_profile/<?= $row->cm_id_no ?>" type="button" class="btn btn-secondary">
                                        #<?= $row->cp_no ?>
                                    </a></td>
                                <td><?= $row->pro_name ?></td>
                                <td><?= $row->purchase_total ?></td>
                                <td><?= $row->down_payment ?></td>
                                <td><strong><?= $row->pay_due ?></strong></td>
                                <td><?= $row->pay_status ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php
                }else{
                    echo "<div class='text-center'><h5 class='mt-4'><strong>No Collection Data Found For You</strong></h5></div>";
                }
                ?>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->