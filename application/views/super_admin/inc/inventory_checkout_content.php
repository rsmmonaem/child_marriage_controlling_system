<?php include "breadcrumb.php";


// Counting No fo items
$count = count($_POST["inv_cart_itemids"]);

//Getting post values
$inv_cart_itemids = $_POST["inv_cart_itemids"];

// Supplier ID Array
$supplierId = [];

if ($count > 0) {
    for ($i = 0; $i < $count; $i++) {
        if (trim($_POST["inv_cart_itemids"][$i] != '')) {
            $result = $this->imm->get_single_inventory_cart($inv_cart_itemids[$i]);
            $supplierId[] = $result->sup_id;
        }
    }
} else {
    redirect('super_admin/inventory_cart/item_not_selected');
}

$sup_id = "";
$sup_name = "";
$inventory_no = "IV" . mt_rand(10000000, 99999999);
$invoice_no = mt_rand(10000000, 99999999);
$invoice_date = date('Y-m-d');
$intotal = 0;

if (count(array_flip($supplierId)) === 1 && end($supplierId) === $supplierId[0]) {
    $sup_id = $supplierId[0];
    $this->db->where('sup_id', $sup_id);
    $sup_name = $this->db->get("supplier")->row("sup_name");
} else {
    redirect('super_admin/inventory_cart/different_supplier');
}

?>

<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/inventory_list/" class="btn btn-secondary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inventory List">
                    <i class="fas fa-pencil"></i>Inventory List
                </a>
                <a href="<?= base_url() ?>super_admin/create_inventory/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Create Inventory">
                    <i class="fas fa-book-alt"></i> Create Inventory
                </a>
                <a href="<?= base_url() ?>super_admin/inventory_cart/" class="btn btn-success btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inventory Cart">
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


<!-- start Inventory cart list -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Inventory Checkout List</h4>
                <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Supplier Name: <?= $sup_name ?></th>
                            <th>Invoice No: <?= $invoice_no ?></th>
                            <th>Date: <?= $invoice_date ?></th>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th>Pro Name</th>
                            <th>Qnty</th>
                            <th>Qnty Price</th>
                            <th>Sell Price</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 1;
                        foreach ($inv_cart_itemids as $inv_id) :
                        ?>
                            <?php
                            $row = $this->imm->get_single_inventory_cart($inv_id);

                            $intotal += $row->total_price;

                            $pro_id = $row->pro_id;
                            $this->db->where('pro_id', $pro_id);
                            $pro_name = $this->db->get("product_name")->row("pro_name");
                            ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $pro_name ?></td>
                                <td><?= $row->pro_qnty ?>-<?= $row->measure ?></td>
                                <td><?= $row->qnty_price ?></td>
                                <td><?= $row->sell_price ?></td>
                                <td><?= $row->total_price ?></td>
                            </tr>
                        <?php endforeach; ?>

                        <form action="<?= base_url() ?>super_admin/insert_inventory_checkout" method="post" enctype="multipart/form-data">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>IN-Total</td>
                                <td>
                                    <input class="form-control" type="text" name="intotal" value="<?= $intotal ?>" readonly>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Commission</td>
                                <td><input class="form-control" type="text" name="commission" required="" value="0"></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Payment</td>
                                <td>
                                    <input class="form-control" type="text" name="payment" required="" value="<?= $intotal ?>">
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Payment System</td>
                                <td>
                                    <select class="form-control" name="pay_sys" required="">
                                        <option value="cash">Cash</option>
                                        <option value="check">Check</option>
                                        <option value="bank_deposit">Bank Deposit</option>
                                        <option value="mobile_banking">Mobile Banking</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <?php foreach ($inv_cart_itemids as $item) : ?>
                                        <input type="hidden" name="inv_cart_itemids[]" value="<?= $item ?>" />
                                    <?php endforeach; ?>
                                </td>
                                <td><input type="hidden" name="inventory_no" value="<?= $inventory_no ?>"></td>
                                <td><input type="hidden" name="invoice_no" value="<?= $invoice_no ?>"></td>
                                <td><input type="hidden" name="invoice_date" value="<?= $invoice_date ?>"></td>
                                <td><input type="hidden" name="sup_id" value="<?= $sup_id ?>"></td>
                                <td>
                                    <button type="submit" class="btn btn-primary ml-2">CHECKOUT</button>
                                </td>
                            </tr>

                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!--  end of inventory cart list   -->


</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->