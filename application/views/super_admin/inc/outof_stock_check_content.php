<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/inventory_list/" class="btn btn-secondary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inventory List">
                    <i class="fas fa-pencil"></i>Inventory List
                </a>
                <a href="<?= base_url() ?>super_admin/create_inventory/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Stock In">
                    <i class="fas fa-pencil"></i>Create Inventory
                </a>
                <a href="<?= base_url() ?>super_admin/inventory_cart/" class="btn btn-success btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inventory Cart">
                    <i class="fas fa-pencil"></i>Inventory Cart
                </a>
                <a href="<?= base_url() ?>super_admin/stock_check/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Stock Check">
                    <i class="fas fa-pencil"></i>Stock Check
                </a>
                <a href="#" class="btn btn-danger disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Out of Stock Check">
                    <i class="fas fa-book-alt"></i>Out of Stock Check
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Out Of Stock Check</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pro Name</th>
                            <th>Code#</th>
                            <th>InStock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->outof_stock() as $row) : ?>
                            <tr style="color:red">
                                <td><?= $i++ ?></td>
                                <td><?= $row->pro_name ?></td>
                                <td><?= $row->pro_code ?></td>
                                <td><?= $row->instock ?></td>
                                <td>EDIT || <a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/deleteoutofstock/<?= $row->pro_id ?>" class="btn btn-danger mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fas fa-times"></i>
                                        DELETE
                                    </a>
                                </td>
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