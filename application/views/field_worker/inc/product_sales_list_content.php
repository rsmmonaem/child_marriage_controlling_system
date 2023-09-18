<?php include "breadcrumb.php"; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Product Sales List</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Purchase No</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Purchase</th>
                            <th>Payment</th>
                            <th>Due</th>
                            <th>Pay Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($this->urm->get_customer_purchase_by_fieldworker() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><a target="_blank" href="<?= base_url() ?>field_worker/customer_purchase_view/<?= $row->cp_no ?>" type="button" class="btn btn-info">
                                        #<?= $row->cp_no ?>
                                    </a></td>
                                <td><?= $row->pro_name ?></td>
                                <td><?= $row->sell_price ?></td>
                                <td><?= $row->purchase_qty ?></td>
                                <td><?= $row->purchase_total ?></td>
                                <td><?= $row->down_payment ?></td>
                                <td><?= $row->pay_due ?></td>
                                <td><?= $row->pay_status ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->