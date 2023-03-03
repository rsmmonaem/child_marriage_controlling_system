<?php include "breadcrumb.php"; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Requisition List</h4>

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Serial</th>
                                <th><strong>Date</strong></th>
                                <th><strong>Req. By</strong></th>
                                <th>Product</th>
                                <th>Supplier</th>
                                <th>Buy Price</th>
                                <th>Sell Price</th>
                                <th><strong>Req. Stock</strong></th>
                                <th>InStock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($this->imm->get_all_product_requisition() as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><strong><?= implode("-", array_reverse(explode("-", explode(" ", $row->created_date)[0]))) ?></strong></td>
                                    <td><strong><?= $row->field_worker ?></strong></td>
                                    <td><?= $row->pro_name ?></td>
                                    <td><?= $row->supplier_name ?></td>
                                    <td><?= $row->latest_price ?></td>
                                    <td><?= $row->sell_price ?></td>
                                    <td><strong><?= $row->req_stock ?></strong></td>
                                    <td><?= $row->instock ?></td>
                                    <td>
                                        <a onclick="return confirm('Want to delete this product requisition ?');" href="<?= base_url() ?>super_admin/delete_product_requisition/<?= $row->req_id ?>/product_requisition" class="btn btn-danger mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="fas fa-times"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->