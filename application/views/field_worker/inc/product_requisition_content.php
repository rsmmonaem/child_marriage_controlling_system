<?php include "breadcrumb.php"; ?>
<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>field_worker/stock_check/" class="btn btn-secondary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Stock Check">
                    <i class="fas fa-pencil"></i>Stock Check
                </a>
                <a href="<?= base_url() ?>field_worker/outof_stock_check/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Out of Stock Check">
                    <i class="fas fa-pencil"></i>Out of Stock Check
                </a>
                <a href="#" class="btn btn-info disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="<?= $page_name = ucwords(str_replace("_", " ", $page_name)); ?>">
                    <i class="fas fa-book-alt"></i><?= $page_name = ucwords(str_replace("_", " ", $page_name)); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Product Requisition || <a class="btn btn-info ml-2" data-toggle="modal" data-target=".create_product_requisition">Add New</a></h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><strong>Date</strong></th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>InStock</th>
                            <th><strong>Req Stock</strong></th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->get_product_requisition_by_fieldworker() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><strong><?= implode("-", array_reverse(explode("-", explode(" ", $row->created_date)[0]))) ?></strong></td>
                                <td><?= $row->pro_name ?></td>
                                <td><?= $row->sell_price ?></td>
                                <td><?= $row->instock ?></td>
                                <td><strong><?= $row->req_stock ?></strong></td>
                                <td>
                                    <a onclick="return confirm('Want to delete this product requisition ?');" href="<?= base_url() ?>field_worker/delete_product_requisition/<?= $row->req_id ?>/product_requisition" class="btn btn-danger mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
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
    </div> <!-- end col -->
</div> <!-- end row -->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->

<?php
include "modal/create_product_requisition.php";
include "footer.php";
include "footer_data_table_js.php";
?>

<script>
    $(document).ready(function() {

        // Targeting Product Requisition Modal To
        $('#request_product_id').on('change', function() {
            let pro_id = this.value;
            console.log("Product id: " + pro_id);
            $.ajax({
                url: "<?= base_url() ?>field_worker/get_product_info_ajx",
                type: "POST",
                data: {
                    pro_id: pro_id
                },
                cache: false,
                success: function(result) {
                    console.log("Result: " + result);
                    $('#request_product_stock_input').html(result);
                }
            });
        });
    });
</script>