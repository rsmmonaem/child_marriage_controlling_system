<?php include "breadcrumb.php"; ?>
<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>


                <a href="#" class="btn btn-secondary disabled btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="<?= $page_name = str_replace("_", " ", $page_name); ?>">
                    <i class="fas fa-book-alt"></i> <?= $page_name = str_replace("_", " ", $page_name); ?>
                </a>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Product Profit Fact</h4>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pro Name</th>
                            <th>Total Qnt</th>
                            <th>In-Stock</th>
                            <th>Sell Qnt</th>
                            <th>Total Buy</th>

                            <th>Total Sell</th>
                            <th>Profit</th>



                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 1;
                        foreach ($this->imm->getproduct_name() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->pro_name ?></td>
                                <td><?= $row->total_stock ?></td>
                                <td><?= $row->instock ?></td>
                                <td><?= $sell_qnt = $row->total_stock - $row->instock ?></td>

                                <td><?= $buy = $sell_qnt * $row->latest_price ?> Tk.</td>

                                <td><?= $sell = $sell_qnt * $row->sell_price ?> Tk.</td>
                                <td><?= $profit = $sell - $buy ?> Tk.</td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- sell base Profit fact -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="table-responsive">

                <h4 class="mt-0 header-title">Sell Base Profit Fact</h4>


                <table id="datatable-buttons2" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                        <tr>
                            <th>Sell Qnt</th>
                            <th>Total Sell</th>
                            <th>Commission</th>
                            <th><b style="color: green;">Profit</b></th>
                            <th>Total Pay</th>

                            <th>Total Due</th>
                            <th>Banking</th>
                            <th>Expenses</th>



                        </tr>
                    </thead>
                    <?php

                    $this->db->select_sum('pro_qnty');
                    $result = $this->db->get('order_details')->row();
                    $sell_qnty = $result->pro_qnty;

                    $this->db->select_sum('intotal');
                    $result = $this->db->get('order_list')->row();
                    $total_sell = $result->intotal;

                    $this->db->select_sum('commission');
                    $result = $this->db->get('order_list')->row();
                    $total_commission = $result->commission;

                    $this->db->select_sum('payment');
                    $result = $this->db->get('order_list')->row();
                    $total_payment = $result->payment;

                    $this->db->select_sum('due');
                    $result = $this->db->get('order_list')->row();
                    $total_due = $result->due;

                    $this->db->select_sum('deposit_amount');
                    $result = $this->db->get('bank_deposit')->row();
                    $bank_pay = $result->deposit_amount;

                    $this->db->where('deposit_type', "fw_salary");
                    $this->db->select_sum('deposit_amount');
                    $result = $this->db->get('bank_deposit')->row();
                    $fw_salary = $result->deposit_amount;
                    $this->db->where('deposit_type', "tso_salary");
                    $this->db->select_sum('deposit_amount');
                    $result = $this->db->get('bank_deposit')->row();
                    $tso_salary = $result->deposit_amount;
                    $expenses = $fw_salary + $tso_salary;

                    ?>

                    <tbody>

                        <tr>
                            <td><?= $sell_qnty ?></td>
                            <td><?= $total_sell ?> Tk.</td>
                            <td><?= $total_commission ?> Tk.</td>
                            <td><b style="color: green;"><?= $total_sell - $total_commission ?> Tk.</b></td>
                            <td><?= $total_payment ?> Tk.</td>
                            <td><?= $total_due ?> Tk.</td>
                            <td><?= $bank_pay ?> Tk.</td>
                            <td><b style="color: red;"><?= $expenses ?> Tk.</b></td>

                        </tr>



                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- end of sell base profit fact -->

</div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->