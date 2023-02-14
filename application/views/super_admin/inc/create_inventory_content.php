<?php include "breadcrumb.php";

$error = $this->uri->segment(3);

$page_name = $this->uri->segment(3);
$sup_id = "";
$invoice_no = "";
$invoice_date = "";
if ($page_name == "return") {

    $sup_id = $this->uri->segment(4);
    $invoice_no = $this->uri->segment(5);
    $invoice_date = $this->uri->segment(6);
}

?>

<div class="card m-b-30">
    <div class="card-body">
        <div class="btn-group">
            <div>
                <a href="<?= base_url() ?>super_admin/inventory_list/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inventory List">
                    <i class="fas fa-pencil"></i>Inventory List
                </a>
                <a href="#" class="btn btn-secondary disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="<?= $page_name = str_replace("_", " ", $page_name); ?>">
                    <i class="fas fa-book-alt"></i> Create Inventory
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

    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form action="<?= base_url() ?>super_admin/insert_inventory" method="post" enctype="multipart/form-data">
                    <h4 class="mt-0 header-title">Product Entry Details</h4> <br>

                    <?php if ($error == "invoice_error") { ?>
                        <div class="alert alert-danger mb-0" role="alert">
                            <strong>Oh snap!</strong> <a href="#" class="alert-link">Invoice No. Already Used!</a>Try Another Number.
                        </div>
                    <?php } ?><br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">PRODUCT NAME</label>
                        <div class="col-sm-6">
                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="pro_id" required>
                                <option>Select</option>
                                <?php foreach ($this->imm->getproduct_name() as $row) : ?>
                                    <option value="<?= $row->pro_id ?>"><?= $row->pro_name ?></option>
                                <?php endforeach; ?>
                            </select>
                            <!-- Error -->
                            <?php if ($error == "pro_name_error") { ?>
                                <div class="alert alert-danger mb-0" role="alert">
                                    <strong>Oh snap!</strong> <a href="#" class="alert-link">Product Name Exist!</a>Try Another Name.
                                </div>
                            <?php } ?>
                            <!-- End Error -->
                        </div>

                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" href="<?= base_url() ?>super_admin/product_list">Add New</a>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">CATEGORY</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="procat_id" required>
                                <!-- <option>Select</option> -->
                                <?php foreach ($this->imm->getpro_category() as $row) : ?>
                                    <option value="<?= $row->pro_cat_name ?>"><?= $row->pro_cat_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" href="<?= base_url() ?>super_admin/system_settings">Add New</a>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">BRAND</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="pro_brand" required>
                                <option value="N/A">Select</option>
                                <?php foreach ($this->imm->getpro_brand() as $row) : ?>
                                    <option value="<?= $row->pro_brand ?>"><?= $row->pro_brand ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" href="<?= base_url() ?>super_admin/pro_brand_list">Add New</a>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">SUPPLIER</label>
                        <div class="col-sm-6">
                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="sup_id" required>
                                <option>Select</option>
                                <?php foreach ($this->imm->getsupplier() as $row) : ?>
                                    <option <?php if ($sup_id != "" && $sup_id == $row->sup_id) {
                                                echo "selected";
                                            } ?> value="<?= $row->sup_id ?>"><?= $row->sup_name ?> <?= $row->cont_num ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn btn-warning ml-2" href="<?= base_url() ?>super_admin/create_supplier">Add New</a>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">INVOICE NO.</label>
                        <?php if ($page_name == "return") { ?>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="invoice_no" value="<?= $invoice_no ?>" readonly>
                            </div>
                        <?php } else { ?>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="invoice_no" required="">
                            </div>
                        <?php } ?>
                        <label for="example-text-input" class="col-sm-2 col-form-label">INVOICE DATE</label>

                        <?php if ($page_name == "return") { ?>
                            <div class="col-sm-4">
                                <input class="form-control" type="date" name="invoice_date" value="<?= $invoice_date ?>" readonly>
                            </div>
                        <?php } else { ?>
                            <div class="col-sm-4">
                                <input class="form-control" type="date" name="invoice_date" required="">
                            </div>
                        <?php } ?>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">QUANTITY</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="number" name="pro_qnty" required>
                        </div>

                        <label for="example-text-input" class="col-sm-2 col-form-label">
                            MEASURE
                        </label>
                        <div class="col-sm-4 d-flex">
                            <select class="form-control" name="measure" required>
                                <option>Select</option>
                                <?php foreach ($this->imm->getmeasure() as $row) : ?>
                                    <option value="<?= $row->measure_name ?>"><?= $row->measure_name ?></option>
                                <?php endforeach; ?>
                            </select>
                            <a class="btn btn-warning ml-2" href="<?= base_url() ?>super_admin/pro_measure_list">Add New</a>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">QNTY PRICE</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="number" name="qnty_price" required>
                        </div>

                        <label for="example-text-input" class="col-sm-2 col-form-label">SELL PRICE</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="number" name="sell_price" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ml-2">INSERT</button>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- start Inventory cart list -->
<?php if ($page_name == "return") { ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Inventory Entry List</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <?php
                        $this->db->where('sup_id', $sup_id);
                        $sup_name = $this->db->get("supplier")->row("sup_name");
                        ?>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Company Name: <?= $sup_name ?></th>
                                <th>Invoice no: <?= $invoice_no ?></th>
                                <th>Date: <?= $invoice_date ?></th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Pro Name</th>
                                <th>Qnty</th>
                                <th>Qnty Price</th>
                                <th>Sell Price</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1;
                            foreach ($this->imm->getinventory_cart() as $row) : ?>
                                <?php
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
                                    <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/inventory_cart_delete/<?= $row->ivc_id ?>/<?= $sup_id ?>/<?= $invoice_no ?>/<?= $invoice_date ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="fas fa-times"></i>
                                        </a></td>

                                </tr>
                            <?php endforeach; ?>

                            <form action="<?= base_url() ?>super_admin/inventory_submit" method="post" enctype="multipart/form-data">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>IN-Total</td>
                                    <?php
                                    $query = $this->db->select_sum('total_price', 'intotal');
                                    $this->db->where('invoice_no', $invoice_no);
                                    $query = $this->db->get('inventory_cart');
                                    $result = $query->result();

                                    $intotal = $result[0]->intotal;
                                    ?>
                                    <td>
                                        <input class="form-control" type="text" name="intotal" value="<?= $intotal ?>" readonly>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Commission</td>
                                    <td><input class="form-control" type="text" name="commission" required="" value="0"></td>
                                    <td></td>
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
                                    <td></td>
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
                                    <td></td>
                                </tr>
                        </tbody>
                    </table>

                    <?php $inventory_no = mt_rand(1000, 9999); ?>

                    <input type="hidden" name="inventory_no" value="IV<?= $inventory_no ?>">

                    <input type="hidden" name="invoice_no" value="<?= $invoice_no ?>">
                    <input type="hidden" name="invoice_date" value="<?= $invoice_date ?>">
                    <input type="hidden" name="sup_id" value="<?= $sup_id ?>">

                    <button type="submit" class="btn btn-primary ml-2">SUBMIT</button>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
<?php } ?>
<!--  end of inventory cart list   -->


</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->


<?php include "modal/create_pro_category.php" ?>
<?php include "modal/create_pro_brand.php" ?>

<?php include "modal/create_measure.php" ?>

<?php include "modal/create_pro_name.php" ?>