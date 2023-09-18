<?php include "breadcrumb.php"; ?>
<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="#" class="btn btn-secondary disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="<?= $page_name = str_replace("_", " ", $page_name); ?>">
                    <i class="fas fa-book-alt"></i> <?= $page_name = str_replace("_", " ", $page_name); ?>
                </a>
                <a href="<?= base_url() ?>field_worker/outof_stock_check/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Out of Stock Check">
                    <i class="fas fa-pencil"></i>Out of Stock Check
                </a>
                <a href="<?= base_url() ?>field_worker/product_requisition/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Product Requisition">
                    <i class="fas fa-book-alt"></i>Product Requisition
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Stock Check</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Supplier</th>
                            <th><strong>InStock</strong></th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->getproduct_stock_exists() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->pro_name ?></td>
                                <td><?= $row->pro_brand ?></td>
                                <td><?= $row->procat_id ?></td>
                                <?php
                                $this->db->where('sup_id', $row->sup_id);
                                $supplier_name = $this->db->get("supplier")->row('sup_name');
                                ?>
                                <td><?= $supplier_name ?></td>
                                <td><strong><?= $row->instock ?></strong></td>
                                <td><?= $row->sell_price ?></td>
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