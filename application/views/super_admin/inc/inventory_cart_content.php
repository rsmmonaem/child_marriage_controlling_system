<?php
    $error_msg = $this->uri->segment(3);
    
    if($error_msg == "different_supplier"){
        echo "<script>alert('Please select same supplier to purchase.');</script>";
    }
    
    if($error_msg == "item_not_selected"){
        echo "<script>alert('Please select cart item.');</script>";
    }
?>
<?php include "breadcrumb.php"; ?>

<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/inventory_list/" class="btn btn-secondary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inventory List">
                    <i class="fas fa-book-alt"></i>Inventory List
                </a>
                <a href="<?= base_url() ?>super_admin/create_inventory/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inventory List">
                    <i class="fas fa-pencil"></i>Create Inventory
                </a>
                <a href="#" class="btn btn-success btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inventory Cart">
                    <i class="fas fa-pencil"></i>Inventory Cart
                </a>
                <a href="<?= base_url() ?>super_admin/stock_check/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Stock Check">
                    <i class="fas fa-pencil"></i>Stock Check
                </a>
                <a href="<?= base_url() ?>super_admin/outof_stock_check/" class="btn btn-danger btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Out of Stock Check">
                    <i class="fas fa-pencil"></i>Out of Stock Check
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Inventory Cart Items</h4>

                <form action="<?= base_url() ?>super_admin/inventory_checkout" method="post" enctype="multipart/form-data">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Supplier</th>
                                <th>Quantity</th>
                                <th>Measure</th>
                                <th>Qnty Price</th>
                                <th>Sell Price </th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1;
                            foreach ($this->imm->get_inventory_cart_items() as $row) : ?>
                                <tr>
                                    <td><input type="checkbox" name="inv_cart_itemids[]" value="<?= $row->ivc_id ?>" /></td>
                                    <?php 
                                        $product_name = $this->imm->get_product_name($row->pro_id);
                                    ?>
                                    <td><?= $product_name ?></td>
                                    <td><?= $row->procat_id ?></td>
                                    <td><?= $row->pro_brand ?></td>
                                    <?php 
                                        $supplier_name = $this->imm->get_supplier_name($row->sup_id);
                                    ?>
                                    <td><?= $supplier_name ?></td>
                                    <td><?= $row->pro_qnty ?></td>
                                    <td><?= $row->measure ?></td>
                                    <td><?= $row->qnty_price ?></td>
                                    <td><?= $row->sell_price ?></td>
                                    <td><?= $row->total_price ?></td>
                                    <td>
                                        <a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/delete_inventory_cart_item/<?= $row->ivc_id ?>" class="btn btn-danger btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <input type="submit" class="btn btn-success btn-lg" name="checkout" value="Inventory Checkout" />
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->