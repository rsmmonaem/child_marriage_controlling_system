<?php include "breadcrumb.php"; ?>
<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>field_worker/stock_check/" class="btn btn-secondary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Stock Check">
                    <i class="fas fa-pencil"></i>Stock Check
                </a>
                <a href="#" class="btn btn-danger disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="<?= $page_name = str_replace("_", " ", $page_name); ?>">
                    <i class="fas fa-book-alt"></i> <?= $page_name = str_replace("_", " ", $page_name); ?>
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
                <h4 class="mt-0 header-title">Out Of Stock Check</h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pro Name</th>
                            <th>Code#</th>
                            <th>InStock</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->outof_stock() as $row) : ?>
                            <tr style="color:red">
                                <td><?= $i++ ?></td>
                                <td><strong><?= $row->pro_name ?></strong></td>
                                <td><?= $row->pro_code ?></td>
                                <td><?= $row->instock ?></td>
                                <!-- <td>
                                    <a onclick="return confirm('Want to submit request stock?');" href="<?= base_url() ?>field_worker/req_stock_update/<?= $row->pro_id ?>" class="btn btn-secondary mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Req Stock">
                                        <i class="fas fa-plus"></i>
                                        Req Stock
                                    </a>
                                </td> -->
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