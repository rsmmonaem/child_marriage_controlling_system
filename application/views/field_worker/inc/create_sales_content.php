<?php include "breadcrumb.php";

$error = $this->uri->segment(3);

$page_name = $this->uri->segment(3);
$fw_id_no = "";
$order_no = "";
$order_date = "";
if ($page_name == "return") {

    $fw_id_no = $this->uri->segment(4);
    $order_no = $this->uri->segment(5);
    $order_date = $this->uri->segment(6);
}

?>

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>

                <a href="<?= base_url() ?>field_worker/sales_list/" class="btn btn-warning btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Inventory List">
                    <i class="fas fa-pencil"></i>Sales List
                </a>
                <a href="#" class="btn btn-secondary disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="<?= $page_name = str_replace("_", " ", $page_name); ?>">
                    <i class="fas fa-book-alt"></i> Create Order
                </a>
                <!--  <a  href="<?= base_url() ?>field_worker/approved_order/" class="btn btn-primary btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Stock Check">
                                                    <i class="fas fa-pencil"></i>Approved Order
                                                </a> -->

            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form action="<?= base_url() ?>field_worker/insert_sales_order" method="post" enctype="multipart/form-data">
                    <h4 class="mt-0 header-title">Product Entry Details</h4> <br>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">FIELD WORKER</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="number" name="fw_id_no" required value="<?= $user_id ?>" readonly>
                        </div>



                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">PRODUCT NAME</label>
                        <div class="col-sm-6">
                            <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;" name="pro_id" required>
                                <option>Select</option>
                                <?php foreach ($this->imm->getproduct_name_fw() as $row) : ?>
                                    <option value="<?= $row->pro_id ?>"><?= $row->pro_name ?>_<?= $row->instock ?><?= $row->measure ?>-<?= $row->buy_price ?> Tk.</option>
                                <?php endforeach; ?>
                            </select>

                        </div>

                    </div>



                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">ORDER NO.</label>
                        <?php if ($page_name == "return") { ?>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="order_no" value="<?= $order_no ?>" readonly>
                            </div>
                        <?php } else { ?>

                            <?php $order_no = "SON-" . mt_rand(1000, 9999); ?>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" name="order_no" required="" readonly="" value="<?= $order_no ?>">
                            </div>
                        <?php } ?>
                        <label for="example-text-input" class="col-sm-2 col-form-label">ORDER DATE</label>

                        <?php if ($page_name == "return") { ?>
                            <div class="col-sm-4">
                                <input class="form-control" type="date" name="order_date" value="<?= $order_date ?>" readonly>
                            </div>
                        <?php } else { ?>
                            <div class="col-sm-4">
                                <input class="form-control" type="date" name="order_date" required="">
                            </div>
                        <?php } ?>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">QUANTITY</label>
                        <div class="col-sm-4">
                            <input class="form-control" type="number" name="pro_qnty" required>
                        </div>

                        <label for="example-text-input" class="col-sm-2 col-form-label">DELEVERY</label>

                        <div class="col-sm-4">
                            <input class="form-control" type="date" name="delevery_date" required="">
                        </div>

                    </div>

                    <!-- 

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">QNTY PRICE</label>
                                                <div class="col-sm-4">
                                                    <input class="form-control" type="number" name="qnty_price" required>
                                                </div>
                                            
                                                <label for="example-text-input" class="col-sm-2 col-form-label">SELL PRICE</label>
                                                <div class="col-sm-4">
                                                    <input class="form-control" type="number" name="sell_price" required>
                                                </div>
                                            </div> -->

                    <button type="submit" class="btn btn-primary ml-2">INSERT</button>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- start Inventory cart list -->
<?php if ($page_name == "return") { ?>
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="table-responsive">

                    <h4 class="mt-0 header-title">Sales Entry List</h4>


                    <table class="table">
                        <?php

                        $this->db->where('fw_id_no', $fw_id_no);
                        $field_worker = $this->db->get("field_worker")->row("field_worker");
                        $this->db->where('fw_id_no', $fw_id_no);
                        $company_code = $this->db->get("field_worker")->row("company_code");
                        $this->db->where('fw_id_no', $fw_id_no);
                        $dis_code = $this->db->get("field_worker")->row("dis_code");


                        ?>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Mother Company: <?= $company_code ?> </th>
                                <th>Distributor: <?= $dis_code ?> </th>
                                <th>Field Worker: <?= $field_worker ?> </th>
                                <th>Order no: <?= $order_no ?></th>
                                <th>Date: <?= $order_date ?></th>

                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Pro Name</th>
                                <th>Qnty</th>
                                <th>Qnty Price</th>
                                <th>Total Price</th>
                                <th>Action</th>

                            </tr>
                        </thead>


                        <tbody>
                            <?php $i = 1;
                            foreach ($this->som->getsales_cart() as $row) : ?>
                                <?php
                                $delevery_date = $row->delevery_date;
                                $pro_id = $row->pro_id;
                                $this->db->where('pro_id', $pro_id);
                                $pro_name = $this->db->get("product_name")->row("pro_name");


                                ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $pro_name ?></td>
                                    <td><?= $row->pro_qnty ?>-<?= $row->measure ?></td>
                                    <td><?= $row->sell_price ?></td>

                                    <td><?= $row->total_price ?></td>
                                    <td><a onclick="return confirm('Want to delete?');" href="<?= base_url() ?>field_worker/sales_cart_delete/<?= $row->so_id ?>/<?= $fw_id_no ?>/<?= $order_no ?>/<?= $order_date ?>" class="btn btn-secondary btn-block mt-0 tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="fas fa-times"></i>
                                        </a></td>

                                </tr>
                            <?php endforeach; ?>

                            <form action="<?= base_url() ?>field_worker/sales_order_submit" method="post" enctype="multipart/form-data">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                    <td>IN-Total</td>
                                    <?php

                                    $query = $this->db->select_sum('total_price', 'intotal');
                                    $this->db->where('order_no', $order_no);
                                    $query = $this->db->get('sales_cart');
                                    $result = $query->result();

                                    $intotal = $result[0]->intotal;
                                    ?>
                                    <td><input class="" type="text" name="intotal" value="<?= $intotal ?>" readonly></td>
                                    <td></td>

                                </tr>


                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                    <td>Commission(%)</td>

                                    <td><input class="form-control " type="number" name="commission" required="" value="0"></td>
                                    <td></td>

                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                    <td>Payment</td>

                                    <td><input class="form-control" type="number" name="payment" required="" value="0"></td>
                                    <td></td>

                                </tr>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                    <td>Payment System</td>

                                    <td><select class="form-control" name="pay_sys" required="">

                                            <option value="cash">Cash</option>
                                            <option value="check">Check</option>
                                            <option value="bank_deposit" selected="">Bank Deposit</option>
                                            <option value="mobile_banking">Mobile Banking</option>




                                        </select></td>
                                    <td></td>

                                </tr>



                        </tbody>
                    </table>



                    <input type="hidden" name="order_no" value="<?= $order_no ?>">

                    <input type="hidden" name="order_date" value="<?= $order_date ?>">
                    <input type="hidden" name="delevery_date" value="<?= $delevery_date ?>">

                    <input type="hidden" name="fw_id_no" value="<?= $fw_id_no ?>">
                    <input type="hidden" name="company_code" value="<?= $company_code ?>">
                    <input type="hidden" name="dis_code" value="<?= $dis_code ?>">


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