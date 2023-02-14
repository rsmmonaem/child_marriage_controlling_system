<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/product_list/" class="btn btn-success btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="All Requisition">
                    <i class="fas fa-pencil"></i>Products List
                </a>
                <a href="<?= base_url() ?>super_admin/system_settings/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="All Requisition">
                    <i class="fas fa-pencil"></i>Product Category
                </a>
                <a href="<?= base_url() ?>super_admin/pro_brand_list/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Pending Requisition">
                    <i class="fas fa-pencil"></i>Product Brand
                </a>
                <a href="<?= base_url() ?>super_admin/pro_measure_list/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Approved Requsition">
                    <i class="fas fa-pencil"></i>Product Measure
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Product Brand/s || <a class="btn btn-warning ml-2" data-toggle="modal" data-target=".create_pro_brand">Add New</a></h4>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand</th>
                            <th>Code#</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->getpro_brand() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->pro_brand ?></td>
                                <td><?= $row->pro_brand_code ?></td>
                                <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/pro_brand_delete/<?= $row->brand_id ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
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
include "modal/create_pro_brand.php";
include "footer.php";
include "footer_data_table_js.php";
?>

<script>
    $(document).ready(function() {
        $('#field_product_brand').on('blur', function() {
            let pro_brand = this.value;
            console.log("Product brand name: " + pro_brand);
            $.ajax({
                url: "<?= base_url() ?>super_admin/check_product_brand_ajx",
                type: "POST",
                data: {
                    pro_brand: pro_brand
                },
                cache: false,
                success: function(result) {
                    console.log("Result: " + result);
                    if (result == "product_brand_exists") {
                        $("#product_brand_name_id .error-message").html("Product brand exists! Change brand name.");
                        $(".create_pro_brand button[type='submit']").prop("disabled", true);
                    } else {
                        $("#product_brand_name_id .error-message").html("");
                        $(".create_pro_brand button[type='submit']").prop("disabled", false);
                    }
                }
            });
        }).on('focus', function() {
            $("#product_brand_name_id .error-message").html("");
        });
    });
</script>