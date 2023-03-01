<?php include "breadcrumb.php"; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Profit By Selling Product</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Purchase No</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Total Buy</th>
                            <th>Total Sell</th>
                            <th style="color: green;"><strong>Profit</strong></th>
                            <th>Pay Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->get_product_sales_list() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><a target="_blank" href="<?= base_url() ?>super_admin/customer_purchase_view/<?= $row->cp_no ?>" class="btn btn-warning btn-block mb-2">#<?= $row->cp_no ?></a></td>
                                <?php 
                                    $this->db->where('cm_id_no', $row->cm_id_no);
                                    $customer_name = $this->db->get("customer")->row("customer");
                                ?>
                                <td><?= $customer_name ?></td>
                                <td><?= $row->pro_name ?></td>
                                <td><?= $sell_qnt = $row->purchase_qty ?></td>

                                <td><?= $buy = $sell_qnt * $row->latest_price ?> Tk.</td>

                                <td><?= $sell = $sell_qnt * $row->sell_price ?> Tk.</td>
                                <td style="background: #a1f6a1;"><strong><?= $profit = $sell - $buy ?> Tk.</strong></td>
                                <td><?= $row->pay_status ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- sell base Profit fact -->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->