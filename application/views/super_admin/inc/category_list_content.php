<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/product_list/" class="btn btn-success btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Products List">
                    <i class="fas fa-pencil"></i>Products List
                </a>
                <a href="#" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Product Category">
                    <i class="fas fa-pencil"></i>Product Category
                </a>
                <a href="<?= base_url() ?>super_admin/pro_brand_list/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Product Brand">
                    <i class="fas fa-pencil"></i>Product Brand
                </a>
                <a href="<?= base_url() ?>super_admin/pro_measure_list/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Product Measure">
                    <i class="fas fa-pencil"></i>Product Measure
                </a>
                <a href="<?= base_url() ?>super_admin/supply_category/" class="btn btn-secondary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Supply Category">
                    <i class="fas fa-pencil"></i>Supply Category
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Category List || <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_pro_category">Add New</a></h4>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pro Category</th>
                            <th>Code#</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->getpro_category() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->pro_cat_name ?></td>
                                <td><?= $row->pro_cat_code ?></td>
                                <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/pro_cat_delete/<?= $row->procat_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
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
include "modal/create_pro_category.php";
include "footer.php";
include "footer_data_table_js.php";
?>

<script>
    $(document).ready(function() {
        $('#field_category_name').on('blur', function() {
            let pro_cat_name = this.value;
            console.log("Product category name: " + pro_cat_name);
            $.ajax({
                url: "<?= base_url() ?>super_admin/check_product_unique_category_ajx",
                type: "POST",
                data: {
                    pro_cat_name: pro_cat_name
                },
                cache: false,
                success: function(result) {
                    console.log("Result: " + result);
                    if (result == "product_category_exists") {
                        $("#product_category_name_id .error-message").html("Product category exists! Change category name.");
                        $(".create_pro_category button[type='submit']").prop("disabled", true);
                    } else {
                        $("#product_category_name_id .error-message").html("");
                        $(".create_pro_category button[type='submit']").prop("disabled", false);
                    }
                }
            });
        }).on('focus', function() {
            $("#product_category_name_id .error-message").html("");
        });
    });
</script>