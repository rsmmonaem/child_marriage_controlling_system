<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="#" class="btn btn-success btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Products List">
                    <i class="fas fa-pencil"></i>Products List
                </a>
                <a href="<?= base_url() ?>super_admin/pro_category_list/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Product Category">
                    <i class="fas fa-pencil"></i>Product Category
                </a>
                <a href="<?= base_url() ?>super_admin/pro_brand_list/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Product Brand">
                    <i class="fas fa-pencil"></i>Product Brand
                </a>
                <a href="<?= base_url() ?>super_admin/pro_measure_list/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Product Measure">
                    <i class="fas fa-pencil"></i>Product Measure
                </a>
                <!-- <a href="<?= base_url() ?>super_admin/supply_category/" class="btn btn-secondary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Supply Category">
                    <i class="fas fa-pencil"></i>Supply Category
                </a> -->
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Product List || <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_pro_name">Add New</a></h4>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Code#</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Total Stock</th>
                            <th>In Stock</th>
                            <th>Measure</th>
                            <th>Buy Price</th>
                            <th>Sell Price</th>
                            <th>All Time Sells</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->getproduct_name() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->pro_name ?></td>
                                <td><?= $row->pro_code ?></td>
                                <td><?= $row->procat_id ?></td>
                                <td><?= $row->pro_brand ?></td>
                                <td><?= $row->total_stock ?></td>
                                <td><?= $row->instock ?></td>
                                <td><?= $row->measure ?></td>
                                <td><?= $row->latest_price ?></td>
                                <td><?= $row->sell_price ?></td>
                                <td><?= $row->all_time_sell ?></td>
                                <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/deleteproductbyid/<?= $row->pro_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                        <i class="fas fa-times"></i>
                                    </a></td>
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
include "modal/create_pro_name.php";
include "footer.php";
include "footer_data_table_js.php";
?>

<script>
    $(document).ready(function() {
        $('#field_product_name').on('blur', function() {
            let pro_name = this.value;
            console.log("Product name: " + pro_name);
            $.ajax({
                url: "<?= base_url() ?>super_admin/check_product_unique_name_ajx",
                type: "POST",
                data: {
                    pro_name: pro_name
                },
                cache: false,
                success: function(result) {
                    console.log("Result: " + result);
                    if (result == "product_name_exists") {
                        $("#product_name_id .error-message").html("Product name exists! Change name.");
                        $(".create_pro_name button[type='submit']").prop("disabled", true);
                    } else {
                        $("#product_name_id .error-message").html("");
                        $(".create_pro_name button[type='submit']").prop("disabled", false);
                    }
                }
            });
        }).on('focus', function() {
            $("#product_name_id .error-message").html("");
        });
    });
</script>